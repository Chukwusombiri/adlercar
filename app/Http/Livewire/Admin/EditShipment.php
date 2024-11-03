<?php

namespace App\Http\Livewire\Admin;

use App\Models\ItemPhoto;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditShipment extends Component
{
    use WithFileUploads;

    public Shipment $shipment;
    public $items;
    public $receiver;
    public $receiver_email;
    public $arrival;
    public $departure;
    public $product_type;
    public $cos;
    public $mos;
    public $payment_method;
    public $size;
    public $arrival_date;
    public $status;
    public $current_location;
    public $shipment_images;    
    public $new_images=[];

    protected $listeners = [
        'addedImage'=>'$refresh',
        'deletedImage'=>'$refresh',
        'editedShipment'=>'$refresh',
        'updatedImage'=>'$refresh',
    ];

    public function mount(Shipment $shipment){
        $this->shipment = $shipment;
        $this->items = $shipment->items;
        $this->receiver = $shipment->receiver;
        $this->receiver_email = $shipment->receiver_email;
        $this->arrival = $shipment->arrival;
        $this->departure = $shipment->departure;
        $this->product_type = $shipment->product_type;
        $this->cos = $shipment->cos;
        $this->mos = $shipment->mos;
        $this->payment_method = $shipment->payment_method;
        $this->size = $shipment->size;
        $this->arrival_date = $shipment->arrival_date;
        $this->status = $shipment->status;
        $this->current_location = $shipment->current_location;
        if($shipment->itemPhoto()->get()){
            $this->shipment_images = ItemPhoto::where('shipment_id',$shipment->id)->get();
        }
    }

    protected function rules(){
        return [
            'items'=>['required','string',],
            'receiver'=>['required','string',],
            'receiver_email'=>['required','email:dns,rfc',],
            'arrival'=>['required','string'],
            'departure'=>'required|string',
            'product_type'=>'required|string',
            'cos'=>[Rule::excludeIf(!$this->cos),'string'],
            'mos'=>['required','string',Rule::in(['road','rail', 'air','sea'])],
            'payment_method'=>['required','string',Rule::in(['Cash Deposit','Credit Card','PayPal','Bank Transfer','Cryptocurrency'])],
            'size'=>'required|numeric',
            'arrival_date'=>[Rule::excludeIf(!$this->arrival_date),'date'],
            'current_location'=>[Rule::excludeIf(!$this->current_location),'string'],
            'status'=>['required','string',Rule::in(['unapproved', 'on-transit','on-hold','completed'])],            
        ];
    }

    public function save(){
        $this->validate();

        $this->shipment->product_type = $this->product_type;
        $this->shipment->items = $this->items;
        $this->shipment->receiver = $this->receiver;
        $this->shipment->receiver_email = $this->receiver_email;
        $this->shipment->departure = $this->departure;
        $this->shipment->arrival = $this->arrival;
        $this->shipment->mos = $this->mos;
        $this->shipment->size = $this->size;
        $this->shipment->payment_method = $this->payment_method;
        if($this->cos){
            $this->shipment->cos= $this->cos;
        }   
        if($this->arrival_date){
            $this->shipment->arrival_date= $this->arrival_date;
        }   
        if($this->current_location){
            $this->shipment->current_location= $this->current_location;
        }        
        $this->shipment->status=$this->status;
        $this->shipment->update();
        $this->emit('editedShipment');   
    }

    public function addImage(){
        if($this->new_images){
            $this->validate([
                'new_images.*'=>[Rule::excludeIf(empty($this->new_images)),'image','max:2048']
            ]);

            foreach($this->new_images as $new_image){
                $item_photo = new ItemPhoto();
                $item_photo->shipment_id = $this->shipment->id;
                $item_photo->photo_path = $new_image->storePublicly('shipment-photos','public');
                $item_photo->save();
            }   
            
            $this->emit('addedImage');
        }       
    }

    public function deleteImage($id){
        if($image = ItemPhoto::find($id)){
            Storage::disk('public')->delete($image->photo_path);
            $image->delete();
            $this->emit('deletedImage');
        }
    }

    public function render()
    {
        return view('livewire.admin.edit-shipment');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\ItemPhoto;
use App\Models\Shipment;
use App\Models\Tracker;
use App\Models\User;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddShipment extends ModalComponent
{
    use WithFileUploads;
    public $sender;
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
    public $images=[];   

    protected function rules(){
        return [
            'sender'=>['required','exists:users,id'],
            'items'=>['required','string',],
            'receiver'=>['required','string',],
            'receiver_email'=>['required','email:dns,rfc',],
            'arrival'=>['required','string'],
            'departure'=>'required|string',
            'product_type'=>'required|string',
            'cos'=>'required|string',
            'mos'=>['required','string',Rule::in(['road','rail', 'air','sea'])],
            'payment_method'=>['required','string',Rule::in(['Cash Deposit','Credit Card','PayPal','Bank Transfer','Cryptocurrency'])],
            'size'=>'required|numeric',
            'arrival_date'=>['required','date'],
            'current_location'=>[Rule::excludeIf(!$this->current_location),'string'],
            'images.*'=>[Rule::excludeIf(empty($this->images)),'image','max:2000'],
            'status'=>['required','string',Rule::in(['unapproved', 'on-transit','on-hold','completed'])]
        ];
    }

    protected $validationAttriutes = [
        'receiver_email'=>'Receiver email',
        'cos'=>'Cost of shipment',
        'mos'=>'mode of shipment',
        'payment_mode'=>'Payment mode',
        'arrival_date'=>'Arrival date',
        'current_location'=>'current location',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();
        
        $shipment = new Shipment();
        $shipment->user_id = $this->sender;
        $shipment->product_type = $this->product_type;
        $shipment->items = $this->items;
        $shipment->receiver = $this->receiver;
        $shipment->receiver_email = $this->receiver_email;
        $shipment->departure = $this->departure;
        $shipment->arrival = $this->arrival;
        $shipment->cos = $this->cos;
        $shipment->mos = $this->mos;
        $shipment->size = $this->size;
        $shipment->arrival_date = $this->arrival_date;
        $shipment->payment_method = $this->payment_method;
        if($this->current_location){
            $shipment->current_location= $this->current_location;
        }
        $shipment->is_approved = true;
        $shipment->status=$this->status;
        $shipment->save();

        $tracker = new Tracker();
        $tracker->shipment_id = $shipment->id;
        $tracker->tracker_id = 'ADL'.(string)Str::ulid();
        $tracker->save();

        if(!empty($this->images)){
            foreach($this->images as $image){
                $item_photo = new ItemPhoto();
                $item_photo->shipment_id = $shipment->id;
                $item_photo->photo_path = $image->storePublicly('shipment-photos','public');
                $item_photo->save();
            }
        }

        $this->closeModalWithEvents(['addedShipment']);
    }
    public function render()
    {
        return view('livewire.admin.add-shipment',[
            'users'=>User::all(),
        ]);
    }
}

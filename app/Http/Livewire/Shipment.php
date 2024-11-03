<?php

namespace App\Http\Livewire;

use App\Mail\ShipmentRequestMail;
use App\Models\ItemPhoto;
use App\Models\Shipment as ModelsShipment;
use App\Models\Tracker;
use App\Models\User;
use App\Notifications\AdminShipmentNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class Shipment extends Component
{
    use WithFileUploads;
    public $items;
    public $receiver;
    public $receiver_email;
    public $arrival;
    public $departure;
    public $product_type;
    public $mos;
    public $payment_method;
    public $size;   
    public $images=[];   

    protected function rules(){
        return [
            'items'=>['required','string',],
            'receiver'=>['required','string',],
            'receiver_email'=>['required','email:dns,rfc',],
            'arrival'=>['required','string'],
            'departure'=>'required|string',
            'product_type'=>'required|string',
            'mos'=>['required','string',Rule::in(['road','rail', 'air','sea'])],
            'payment_method'=>['required','string',Rule::in(['Cash Deposit','Credit Card','PayPal','Bank Transfer','Cryptocurrency'])],
            'size'=>'required|numeric',
            'images.*'=>[Rule::excludeIf(empty($this->images)),'image','max:2000'],
        ];
    }

    protected $validationAttributes = [
        'receiver_email'=>'Recipient email',
        'receiver'=>'Recipient Name',
        'cos'=>'Cost of shipment',
        'mos'=>'Mode of shipment',
        'payment_mode'=>'Payment mode',
        'arrival'=>'Destination',
        'departure'=>'Origin'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(){
        $this->validate();
        
        $shipment = new ModelsShipment();       
        $shipment->product_type = $this->product_type;
        $shipment->items = $this->items;
        $shipment->receiver = $this->receiver;
        $shipment->receiver_email = $this->receiver_email;
        $shipment->departure = $this->departure;
        $shipment->arrival = $this->arrival;
        $shipment->mos = $this->mos;
        $shipment->size = $this->size;
        $shipment->payment_method = $this->payment_method;
        $shipment->user_id = Auth::id();
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

        $data = [
            'product_type'=>$this->product_type,
            'receiver'=>$this->receiver,
            'items'=>$this->items,
            'receiver_email'=>$this->receiver_email,
            'departure'=>$this->departure,
            'arrival'=>$this->arrival,
            'mos'=>$this->mos,
            'size'=>$this->size,
            'payment_method'=>$this->payment_method,
        ];
        Mail::to(auth()->user()->email)->send(new ShipmentRequestMail($data));
       
        $this->dispatchBrowserEvent('shipmentSubmitted',[
            'title'=>'Successful!',
            'html'=>'<p>Our team will review your request shortly. Check your email for more details.</p>', 
            'icon'=>'success',                                               
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.shipment');
    }
}

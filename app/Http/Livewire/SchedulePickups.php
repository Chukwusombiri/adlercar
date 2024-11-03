<?php

namespace App\Http\Livewire;

use App\Mail\PickupMail;
use App\Models\User;
use App\Notifications\AdminPickupNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SchedulePickups extends Component
{
    public $pickup=[];

    public function mount(){
        $this->pickup = [
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'pickup_item'=>'',
            'pickup_date'=>'',
            'pickup_time'=>'',
            'pickup_address' =>''
        ];
    }

    protected function rules(){
        return [
            'pickup.name'=>'required|string',
            'pickup.email'=>'required|email:rfc,dns',
            'pickup.phone'=>'required|string',
            'pickup.pickup_item'=>'required|string',
            'pickup.pickup_date'=>'required|date',
            'pickup.pickup_time'=>['required','date_format:H:i','after_or_equal:08:00','before_or_equal:17:00',                
            ],
            'pickup.pickup_address'=>'required|string',            
        ];
    }

    protected $validationAttributes = [
        'pickup.name'=>'Name',
        'pickup.email'=>'Email Address',
        'pickup.phone'=>'Phone',
        'pickup.pickup_item'=>'Pick-up Item(s)',
        'pickup.pickup_date'=>'Pick-up Date',
        'pickup.pickup_time'=>'Pick-up time',
        'pickup.pickup_address'=>'Pick-up address',
    ]; 

    protected $messages = [
        'pickup.pickup_time.after' => 'Pick-up time must be a time not less than 08:00',
        'pickup.pickup_time.before' => 'Pick-up time must be a time not greater than 17:00',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } 

    public function submit(){
        $this->validate();

        Mail::to($this->pickup['email'])->send(new PickupMail($this->pickup));
        if($admin = User::where('is_admin',[1])->first()){
            $admin->notify(new AdminPickupNotification($this->pickup));
        }

        $this->dispatchBrowserEvent('pickupSubmitted',[
            'title'=>'Good Job!',
            'html'=>'<p>Our team will review your request shortly.</p>', 
            'icon'=>'success',                                               
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.schedule-pickups');
    }
}

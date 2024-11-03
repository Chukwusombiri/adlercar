<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shipment;
use App\Models\Tracker;
use App\Notifications\ShipmentApprovalNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Shipments extends Component
{
    use WithPagination;   
    public $date = 'desc';    
    public $search ='';

    protected $listeners = [        
        'addedShipment'=>'$refresh',               
        'deletedShipment'=>'$refresh',  
        'approvedShipment'=>'$refresh',           
    ];

    public function updatingSearch()
    {
        $this->resetPage();                   
    }

    public function clear(){
        $this->search = '';
    }

    public function approve($id){
        $shipment=Shipment::find($id);
        if($shipment->is_approved = true){
            $shipment->status='on-transit';
            $shipment->update();        
            $tracker = new Tracker();
            $tracker->tracker_id ='ADL'.(string)Str::ulid();
            $tracker->shipment_id=$shipment->id;
            $tracker->save();           
            $shipment->user->notify(new ShipmentApprovalNotification($shipment));
           
            $this->emit('approvedShipment'); 
        }
    }

    public function delete($id){
        if(!auth()->user()->is_admin) {
            return redirect()->route('login');
        }

       $shipment = Shipment::find($id);      
       $shipment->delete();
       $this->emit('deletedShipment');      
    }

    public function render()
    {
        return view('livewire.admin.shipments',[
            'shipments' => Shipment::where('receiver', 'like', '%'.$this->search.'%')            
            ->orWhere('receiver_email','LIKE', '%'.$this->search.'%')        
            ->orderBy('created_at',$this->date)
            ->paginate(10),
        ]);
    }
}

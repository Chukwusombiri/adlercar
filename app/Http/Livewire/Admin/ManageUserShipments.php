<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shipment;
use App\Models\Tracker;
use App\Models\User;
use App\Notifications\ShipmentApprovalNotification;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class ManageUserShipments extends Component
{
    Use WithPagination;

    public User $user;

    protected $listeners=[
    'addedShipment'=>'$refresh',
    'editedShipment'=>'$refresh'];

    public function mount(User $user){
        $this->user = $user;
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
            $this->user->notify(new ShipmentApprovalNotification($shipment));                      
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
        return view('livewire.admin.manage-user-shipments',[
            'shipments'=>Shipment::where('user_id',$this->user->id)->paginate(7),
        ]);
    }
}

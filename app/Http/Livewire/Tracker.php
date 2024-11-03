<?php

namespace App\Http\Livewire;

use App\Models\Tracker as ModelsTracker;
use Livewire\Component;

class Tracker extends Component
{
    public $tracker_id;

    public function track(){
        $trackerTrimmed =trim($this->tracker_id);
        if($tracker = ModelsTracker::find($trackerTrimmed)){
            return redirect()->route('trackNow',['tracker_id'=>$trackerTrimmed]);
        }else if(empty($this->tracker_id) || !$this->tracker_id){
            $this->emit('emptyTracker');
            $this->reset();
        }else{
            $this->emit('invalidTracker');
            $this->reset();
        }
    }
    public function render()
    {
        return view('livewire.tracker');
    }
}

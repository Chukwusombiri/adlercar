<?php

namespace App\Http\Livewire\Admin;

use App\Models\ItemPhoto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class UpdateShipmentImage extends ModalComponent
{
    use WithFileUploads;
    public ItemPhoto $item_photo;
    public $image;

    protected function rules(){ 
        return [
        'image'=>['required','image','max:2048']
        ];
    }

    public function mount(ItemPhoto $photo){
        $this->item_photo = $photo;        
    }

    public function submit(){
        $this->validate();

        Storage::disk('public')->delete($this->item_photo->photo_path);
        $this->item_photo->photo_path = $this->image->storePublicly('shipment-photos','public');
        $this->item_photo->save();
        $this->closeModalWithEvents(['updatedImage']);
    }
    public function render()
    {
        return view('livewire.admin.update-shipment-image');
    }
}

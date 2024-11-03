<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class RemoveImage extends ModalComponent
{
    public User $user;

    public function mount(User $user){
        $this->user = $user;
    }

    public static function modalMaxWidth(): string
    {       
        return 'xl';
    }

    public function remove(){
        $user = User::find($this->user->id);
        if($user->profile_photo_path!=='profile-photos/userimg.jpg'){
            Storage::disk('public')->delete($user->profile_photo_path);
            $user->profile_photo_path = 'profile-photos/userimg.jpg';  
            $user->save();      
            $this->closeModalWithEvents(['removedImage']);
        }        
    }

    public function render()
    {
        return view('livewire.admin.remove-image');
    }
}

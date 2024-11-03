<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Validation\Rules;

class AddMember extends ModalComponent
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;    

    protected function rules(){
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns,rfc', 'max:255','unique:users,email'],            
            'password' => ['required', 'confirmed', Rules\Password::min(8)],           
        ];
    }

    public function save(){
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),                         
        ]);
       
        $user->profile_photo_path = 'profile-photos/userimg.jpg';   
        $user->save();

        $this->closeModalWithEvents(['addedMember']);
    }
    public function render()
    {
        return view('livewire.admin.add-member');
    }
}

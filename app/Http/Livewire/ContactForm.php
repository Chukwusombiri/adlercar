<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    protected function rules(){
        return [
            'name'=>'required|string',
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|string',
            'message'=>'required|string',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } 

    public function submit(){
        $this->validate();

        Mail::to('info@adlercargo.com')->send(new ContactMail($this->name,$this->email,$this->phone,$this->message));
        $this->emit('contactFormSubmitted');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

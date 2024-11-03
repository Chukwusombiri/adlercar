<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class UserProfile extends ModalComponent
{
    use WithFileUploads;

    public $photo;
    public $name;
    public $email;
    public $phone;
    public $marital_status;
    public $occupation;
    public $address;
    public $country;        
    public User $user;    
    protected $listeners = ['removedImage'=>'$refresh'];

    public function mount(User $user){
        $this->user =$user;  
        $this->name = $user->name;        
        $this->email = $user->email;
        $this->phone = $user->phone;       
        if($this->user->contact){
            $this->marital_status = $this->user->contact->marital_status; 
            $this->occupation = $this->user->contact->occupation;
            $this->country = $this->user->contact->country;
            $this->address = $this->user->contact->address;
        }
    }

    public static function modalMaxWidth(): string
    {       
        return 'xl';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
   

    public function submit()
    {
       $this->validate();
      
       $user = User::find($this->user->id);
       $user->name = $this->name;
       $user->email = $this->email;              

       if($this->photo){
        $user->profile_photo_path = $this->photo->storePublicly('profile-photos','public');
       }
       $user->save();

       if($this->occupation || $this->address || $this->country || $this->marital_status){
        $contact =  new Contact();
        $contact->user_id = $this->user->id;
        if($this->occupation){
            $contact->occupation = $this->occupation;
        }
        if($this->address){
            $contact->address = $this->address;
        }
        if($this->marital_status){
            $contact->marital_status = $this->marital_status;
        }
        if($this->country){
            $contact->country = $this->country;
        }
        $contact->save();
       }       
       $this->closeModalWithEvents(['userUpdated']);
    }

    public function render()
    {       
        return view('livewire.admin.user-profile');
    }

    protected function rules(){
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users','email')->ignore($this->user->id)],           
            'photo'=>[Rule::excludeIf(!$this->photo),'image','max:2000'],   
            'marital_status'=>[Rule::excludeIf(!$this->marital_status),'string','in:single,married,divorced'],
            'occupation'=>[Rule::excludeIf(!$this->occupation),'string'],
            'address'=>[Rule::excludeIf(!$this->address),'string'],
            'country'=>[Rule::excludeIf(!$this->country),'string'],
        ];
    }
}

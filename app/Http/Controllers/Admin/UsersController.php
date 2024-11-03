<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public $users;    

    public function __construct()
    {
        $this->users = User::whereNotIn('is_admin', [1])
        ->orderBy('id','desc')->get();       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                    
        return view('admin.users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                          
        return view('admin.addusers')->with(['users'=>$this->users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            'phone' => ['required', 'string', 'max:255', 'unique:users'],         
            'upline_id'=>['numeric','exists:users,id'],            
            'password' => ['required', 'confirmed', Rules\Password::min(8)->numbers()->symbols()->mixedCase()],
        ]);

        $response = Array(
            'status'=>0,
            'result'=>'unsuccessful',
            'error_message'=>'none',
        );

        if($validator->fails()){
            $response['error_message']=$validator->errors();
            return response()->json($response);
        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),   
                'phone'=>$request->phone,                             
                'profile_photo_path' => 'profile-photos/userimg.jpg',           
            ]);
    
            $user->ref_link = route('register',['ref'=>$user->id]);
            $user->save();
    
            event(new Registered($user));           
            $response['status']=1;
            $response['result']='Successful';            
            return response()->json($response);
        }             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {              
        $user = User::find($id);  
       return view('admin.showuser')->with([
        'user'=>$user,
       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $user = User::find($id);
        $prev_url = url()->previous();
        return view('admin.edituser')->with([
            'user' => $user,
            'prev_url'=>$prev_url
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {       
        $user = User::find($id);       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'acROI' =>['required','numeric'],           
            'profileImage'=>['image','max:1999'],           
        ]);
        
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->acROI = $request->acROI;             
        if($request->hasFile('profileImage')){
            $user->updateProfilePhoto($request->profileImage);
        };                
        $user->update();

        return redirect()->back()->with(['success' => 'Member details updated']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $deleted = $user->name;
        //check for authorized user
        if (!auth()->user()->is_admin) {
            return redirect()->route('guestHome');
        }
        $user->delete();
        return redirect()->route('admin.users')->with('success', $deleted . ' was deleted');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User,Shipment,ItemPhoto};
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminDashBoardController extends Controller
{   
   
    public function index(){
        $users = User::whereNotIn('is_admin', [1])
        ->count();
        $shipments = Shipment::count();
        $approved_shipments = Shipment::where('is_approved',[1])->count();
        $completed_shipments = Shipment::where('status','=','completed')->count();  
        $ontransit_shipments = Shipment::where('status','=','on-transit')->count();   
        $onhold_shipments = Shipment::where('status','=','on-hold')->count();
        $unapproved_shipments = Shipment::where('is_approved',[0])->count();  
        $newusers = User::where('created_at','>',Auth::user()->last_sign_out_at)
        ->orderBy('created_at','desc')
        ->get();
        $new_shipments = Shipment::where('created_at','>',Auth::user()->last_sign_out_at)
        ->orderBy('created_at','desc')->take(7)
        ->get();
        $new_approved_shipments=Shipment::where('is_approved',[1])
        ->where('updated_at','>',Auth::user()->last_sign_out_at)
        ->orderBy('created_at','desc')->take(7)
        ->get();

       /*  $admin = User::find(auth()->user()->id); */
                
        return view('admin.dashboard')->with(
            [
            'users'=>$users,
            'newusers'=>$newusers,
            'unapproved_shipments'=>$unapproved_shipments,
            'onhold_shipments'=>$onhold_shipments,
            'ontransit_shipments'=>$ontransit_shipments,
            'completed_shipments'=>$completed_shipments,
            'approved_shipments'=>$approved_shipments,
            'shipments'=>$shipments,
            'new_approved_shipments'=>$new_approved_shipments,
            'new_shipments'=>$new_shipments,
            ]
        );
    }

    public function resetpwd(){             
        return view('admin.resetpwd');
    }

    public function reset(Request $request){        
        request()->validate([
            'current_password' => ['required'],
            'new_password' => ['required','confirmed', Rules\Password::defaults()]
        ]);
 
        if (!Hash::check($request->current_password, $request->user()->password)) {
             return back()->with([
                 'error' => 'The provided password does not match our records.',
             ]);
         }
 
         User::whereId(auth()->user()->id)->update([
             'password' => Hash::make($request->new_password)
         ]);

        return redirect()->route('admin.resetpwd')->with(['success'=>'password changed successfully']);
    }

    public function readNotifications($id){
        $admin = User::find(auth()->user()->id);
       if($id == 'all'){
        $notifications = $admin->unreadNotifications;  
        $notifications->markAsRead();        
       }else{
        $notification = $admin->unreadNotifications()->where('notifications.id',$id)->first();  
        $notification->markAsRead();                    
       }

       return redirect()->back();
    }          
}

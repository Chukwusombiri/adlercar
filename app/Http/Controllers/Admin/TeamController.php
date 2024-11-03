<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public $teamMembers;

    public function __construct()
    {
        $this->teamMembers = Team::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {               
        return view('admin.team')->with(['teamMembers'=>$this->teamMembers,           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {               
        return view('admin.addteam',[]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string'],
            'position' => ['required','string'],           
            'photo_path' => ['required','image','max:1999']
        ]);

        if ($request->hasFile('photo_path')) {          
           $path = $request->photo_path->storePublicly('team', 'public');
        }else {
            $path = 'team/team_avatar.jpg';
        }

        $teamMember =  new Team();
        $teamMember->name= $request->name;
        $teamMember->position= $request->position;        
      
        $teamMember->photo_path= $path;

        $teamMember->save();

        return redirect()->route('admin.teamMembers')->with('success','Team member added successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $teamMember = Team::find($id);       
       return view('admin.editteam')->with([          
           'teamMember' => $teamMember,
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
        $this->validate($request,[
            'name' => ['required','string'],
            'position' => ['required','string'],           
            'photo_path' => ['image','max:1999']
        ]);
      
        $teamMember =  Team::find($id);  

        if ($request->hasFile('photo_path')) {
            $path = $request->photo_path->storePublicly('team', 'public');
            $oldimage = $teamMember->photo_path;
            $teamMember->photo_path = $path;
            if($oldimage != 'team/team_avatar.jpg'){
                Storage::disk('public')->delete($oldimage);
            }            

        }   
              
        $teamMember->name= $request->name;
        $teamMember->position= $request->position;  
        $teamMember->update();

        return redirect()->route('admin.teamMembers')->with('success', 'Team member modified successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teamMember = Team::find($id);
        if($teamMember->photo_path != 'team/team_avatar.jpg'){
            Storage::disk('public')->delete($teamMember->photo_path);  
        }
        $teamMember->delete();

        return redirect()->route('admin.teamMembers')->with('success','team member removed successfully');
    }
}

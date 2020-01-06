<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\League;

class TeamController extends Controller
{

    // this function is to list all teams
    public function index()
    {
        // list all the teams
        $teams = Team::with('league')->get();
        return view('admin.team.index', compact('teams'));
    }

    // this function is to view create team page
    public function create()
    {
        // list all the leagues
        $leagues = League::all();
        return view('admin.team.create', compact('leagues'));
    }

    // this function is to save team data
    public function store(Request $request)
    {
        $newTeam = new Team;
        // $newTeam->name = ($request->name) ? $request->name : 'Default Team';
        // client Orignal file name.
        // dd($request->file('photo')->getClientOriginalName());
        

        
        $newTeam->name = $request->name;
        $file = $request->file('photo');
        request()->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $request->file('photo')->store('public/images');
        $newTeam->photo = $request->file('photo')->hashName();
        $newTeam->num_of_players = $request->no_players;
        $newTeam->league_id = $request->league;
        $newTeam->save();
        return redirect('teams');
    }

    // this function is to show form to update team
    public function edit($id)
    {
        $team = Team::where('id',$id)->with('league')->first();
        $leagues = League::all();
        return view('admin.team.edit', compact('team', 'leagues'));
    }

    // this function is to save updated data
    public function update(Request $request,$id)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        //check if request has file. 
        if ($request->hasFile('photo')) {
            // old name file.
            $oldName = $request->old_name;
            // check if file exists already.
            if(file_exists("storage/images/$oldName")){
                // delete the old file
                unlink("storage/images/$oldName");
            }
            $team->photo = $request->photo;
            $file = $request->file('photo');
            request()->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $request->file('photo')->store('public/images');
            $team->photo = $request->file('photo')->hashName();
        }
        else{
            echo 'Error';
            echo '<a href="{{ url("/teams") }}"></a>';
            die();
        }

        $team->num_of_players = $request->no_players;
        $team->league_id = $request->league;
        $team->save();
        return redirect('teams');
    }

    // this function is to read data
    public function show($id)
    {
        $team = Team::where('id',$id)->with('league')->first();
        return view('admin.team.show', compact('team'));
    }

    // this function is to delete data
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect('/teams');
    }
}

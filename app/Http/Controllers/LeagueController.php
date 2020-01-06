<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // list all the leagues
        $leagues = League::all();
        // dd ($leagues);
        return view('admin.league.index', compact('leagues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.league.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // extend a new class from Model
        $newLeague = new League;
        // Saving the new League record from create.php form.
        $newLeague->name = $request->name;
        $newLeague->year = $request->year;
        $newLeague->save();
        // dd($newLeague);
        return redirect('leagues');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oneLeague = League::find($id);
        return view('admin.league.show' , compact('oneLeague'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $league = League::find($id);
        return view('admin.league.edit', compact('league'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $league = League::find($id);
        $league->name = $request->name;
        $league->year = $request->year;
        $league->save();
        return redirect('leagues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $league = League::find($id)->delete();
        return redirect('leagues');
    }
}

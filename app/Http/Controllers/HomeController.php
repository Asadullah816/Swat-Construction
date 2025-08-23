<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class HomeController extends Controller
{
    public function addTeam(Request $request)
    {
        $team = new Team();
        $user = auth()->user();
        $team->name = $request->name;
        $team->service = $request->service;
        $team->email = $request->email;
        $team->description = $request->description;
        $team->image = $request->file('image')->store('teams', 'public');
        $team->user_id = $user->id;
        $team->save();
        return redirect()->back()->with('success', 'Team added successfully!');
    }
    public function getTeams()
    {
        $teams = Team::all();
        return view('teams', compact('teams'));
    }
    public function getTeam($id)
    {
        $team = Team::find($id);
        return view('team', compact('team'));
    }
    public function editTeam($id)
    {
        $team = Team::find($id);
        return view('edit-team', compact('team'));
    }
    public function updateTeam(Request $request, $id)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->service = $request->service;
        $team->email = $request->email;
        $team->description = $request->description;
        $team->save();
        return redirect()->back()->with('success', 'Team updated successfully!');
    }
    public function deleteTeam($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->back()->with('success', 'Team deleted successfully!');
    }
}

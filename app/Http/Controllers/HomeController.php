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
    public function teams()
    {
        $teams = Team::all(); // or add filters like ->take(3) if only top leaders
        return view('teams', compact('teams'));
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
    public function showcontact($id)
    {
        $team = Team::find($id);
        return view('pages.contact', compact('team'));
    }
    public function sendContact(Request $request, $teamId)
    {
        $team = Team::findOrFail($teamId);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'message' => $request->message,
            'team_name' => $team->name,
        ];

        Mail::to($team->email)->send(new TeamContactMail($data));

        return redirect()->back()->with('success', 'Your message has been sent to the team!');
    }
}

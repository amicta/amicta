<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamCreateRequest;
use App\Models\Competition;
use App\Models\Team;
use App\Models\User;
use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index(User $user)
    {
        $user = Auth::user();
        $data['user'] = $user;
        $productBased = Competition::where('type', 'product')->first()->id;

        $data['team'] = Team::where('leader_id', $user->id)->where('competition_id', $productBased)->first();
        $team = $data['team'];

        return view('pages.team.index', compact('data', 'team'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(TeamCreateRequest $request, Team $team)
    {
        $team->name = $request->name;
        $team->product = $request->product;
        $team->description = $request->description;
        $team->member = $request->member;

        $team->save();

        return redirect()->route('submissions.index')->with('status', [
            'element' => 'success',
            'message' => 'Penambahan data TIM berhasil! Silahkan menyelesaikan submisi kamu'
        ]);
    }

    public function destroy($id)
    {
        //
    }
}

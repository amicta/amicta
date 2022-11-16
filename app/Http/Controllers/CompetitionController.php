<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Category;
use App\Models\Competition;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::with(['categories', 'teams'])->where('is_publish', true)->get();
        $data['categories'] = Category::where('is_publish', true)->get();

        return view('pages.competition.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $productBased = Competition::where('type', 'product')->first()->id;
        $firstAssignmentPB = Assignment::where('competition_id', $productBased)->where('assign_registered', true)->first()->id;

        $hackathon = Competition::where('type', 'hackathon')->first()->id;
        $firstAssignmentH = Assignment::where('competition_id', $hackathon)->where('assign_registered', true)->first()->id;

        $user->competitions()->attach($request->competition_id);

        if ($request->category_id) {
            $team = $user->teams()->create([
                'name' => 'Belum dibuat',
                'competition_id' => $request->competition_id,
                'category_id' => $request->category_id,
            ]);
        }

        if ($request->competition_id == $productBased) {
            $user->submissions()->create([
                'assignment_id' => $firstAssignmentPB,
                'competition_id' => $request->competition_id,
                'user_id' => $user->id,
                'team_id' => $team->id,
                'status' => 'assigned',
            ]);

            return redirect()->route('teams.index')->with('status', [
                'element' => 'success',
                'message' => 'Pendaftaran berhasil! Silahkan melengkapi data TIM kamu'
            ]);
        }

        if ($request->competition_id == $hackathon) {
            $user->submissions()->create([
                'assignment_id' => $firstAssignmentH,
                'competition_id' => $request->competition_id,
                'user_id' => $user->id,
                'status' => 'assigned',
            ]);

            return redirect()->route('submissions.index')->with('status', [
                'element' => 'success',
                'message' => 'Pendaftaran berhasil! Silahkan menyelesaikan submisi kamu'
            ]);
        }

        return redirect()->route('competitions.index')->with('status', [
            'element' => 'success',
            'message' => 'Pendaftaran berhasil!'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

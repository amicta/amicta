<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Competition;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetitionController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::with('categories')->with('teams')->where('is_publish', true)->get();
        $data['categories'] = Category::where('is_achive', true);

        return view('pages.competition.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $user->competitions()->attach($request->competition_id);

        if ($request->category_id) {
            $user->teams()->create([
                'name' => 'Belum dibuat',
                'competition_id' => $request->competition_id,
                'category_id' => $request->category_id,
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

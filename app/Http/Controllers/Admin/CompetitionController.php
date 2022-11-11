<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::all();
        return view('admin.pages.competitions.index', compact('data'));
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

    public function update(Request $request, Competition $competition)
    {
        if($request->is_open != null){
            $competition->is_open = $request->is_open;
        }
        if($request->is_publish != null){
            $competition->is_publish = $request->is_publish;
        }
        $competition->save();

        return redirect()->route('admin.competitions.index')->with('status', [
            'element' => 'success',
            'message' => 'Update sukses!'
        ]);
    }

    public function destroy($id)
    {
        //
    }
}

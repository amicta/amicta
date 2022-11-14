<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Competition;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::all();
        $data['assignments'] = Assignment::all();

        return view('admin.pages.assignments.index', compact('data'));
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

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

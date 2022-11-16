<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AssignmentCreateRequest;
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

    public function store(AssignmentCreateRequest $request)
    {
        Assignment::create($request->validated());

        return redirect()->route('admin.assignments.index')->with('status', [
            'element' => 'success',
            'message' => 'Penugasan baru berhasil disimpan!'
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

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return redirect()->route('admin.assignments.index')->with('status', [
            'element' => 'success',
            'message' => 'Penugasan berhasil dihapus!'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::all();
        $data['submissions'] = Submission::all();

        return view('admin.pages.submissions.index', compact('data'));
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

    public function edit(Submission $submission)
    {
        return view('admin.pages.submissions.edit', compact('submission'));
    }

    public function update(Request $request, Submission $submission)
    {
        $submission->reviewer_note = $request->reviewer_note;
        $submission->status = $request->status;
        $submission->save();

        return redirect()->route('admin.submissions.index')->with('status', [
            'element' => 'success',
            'message' => 'Berhasil memperbarui submisi!'
        ]);
    }

    public function destroy(Submission $submission)
    {
        $submission->delete();

        return redirect()->route('admin.submissions.index')->with('status', [
            'element' => 'success',
            'message' => 'Submisi berhasil dihapus!'
        ]);
    }
}

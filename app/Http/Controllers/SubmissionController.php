<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function index(User $user)
    {
        $data['competitions'] = Auth::user()->competitions;
        $data['submission'] = Auth::user()->submissions;

        return view('pages.submission.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Submission $submission)
    {
        return view('pages.submission.show', compact('submission'));
    }

    public function edit(Submission $submission)
    {
        return view('pages.submission.edit', compact('submission'));
    }

    public function update(Request $request, Submission $submission)
    {
        $submission->response = $request->response;
        $submission->status = 'submited';
        $submission->save();

        return redirect()->route('submissions.index')->with('status', [
            'element' => 'success',
            'message' => 'Berhasil memperbarui submisi!'
        ]);
    }

    public function destroy($id)
    {
        //
    }
}

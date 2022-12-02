<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SubmissionExport;
use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Competition;
use App\Models\Submission;
use Carbon\Carbon;
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

        if ($request->status == 'accepted') {
            $countAssignment = Assignment::where('competition_id', $submission->competition_id)->count();

            if ($countAssignment > 1) {
                $nextAssignment = Assignment::where('competition_id', $submission->competition_id)->latest()->take(1)->first()->id;

                Submission::create([
                    'assignment_id' => $nextAssignment,
                    'competition_id' => $submission->competition_id,
                    'user_id' => $submission->user->id,
                    'team_id' => $submission->team->id,
                    'status' => 'assigned',
                ]);
            }
        }

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

    public function export(){
        $now = Carbon::now()->format('d-m-Y H:i:s');

        return \Maatwebsite\Excel\Facades\Excel::download(new SubmissionExport,'Submission - ' . $now . '.xlsx');
    }
}

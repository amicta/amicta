<?php

namespace App\Exports;

use App\Models\Submission;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubmissionExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Submission::join('users', 'submissions.user_id', '=', 'users.id')
        ->join('competitions', 'submissions.competition_id', '=', 'competitions.id')
        ->join('teams', 'submissions.team_id', '=', 'teams.id')
        ->join('assignments', 'submissions.assignment_id', '=', 'assignments.id')
        ->get();
    }
}

<?php

namespace App\Exports;

use App\Models\Submission;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SubmissionExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = Submission::leftJoin('users', 'submissions.user_id', '=', 'users.id')
        ->leftJoin('competitions', 'submissions.competition_id', '=', 'competitions.id')
        ->leftJoin('teams', 'submissions.team_id', '=', 'teams.id')
        ->leftJoin('assignments', 'submissions.assignment_id', '=', 'assignments.id')
        ->get(['competitions.name as competitionname', 'assignments.title', 'users.nim', 'users.name', 'users.email', 'users.phone', 'teams.name as teamname', 'teams.product', 'teams.description', 'submissions.status', 'response']);

        return $data;
    }

    public function headings(): array
    {
        return [
            'COMPETITION',
            'SUBMISSION',
            'NIM',
            'NAME',
            'EMAIL',
            'PHONE',
            'TEAM',
            'PRODUCT',
            'DESCRIPTION',
            'STATUS',
            'RESPONSE'
        ];
    }
}

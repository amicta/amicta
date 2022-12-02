<?php

namespace App\Exports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ParticipantExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data = Participant::with('event')
                ->leftJoin('events', 'participants.event_id', '=', 'events.id')
                ->whereRelation('event', 'is_publish', '=', 1)
                ->get(['events.name as eventname', 'nim', 'participants.name', 'program_study', 'email', 'phone']);

        return $data;
    }

    public function headings(): array
    {
        return [
            'EVENT',
            'NIM',
            'NAME',
            'PROGRAM STUDY',
            'EMAIL',
            'PHONE',
        ];
    }
}

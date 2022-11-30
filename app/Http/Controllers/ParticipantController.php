<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipantCreateRequest;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(ParticipantCreateRequest $request)
    {
        Participant::create($request->validated());

        return redirect()->route('event.index')->with('status', [
            'element' => 'success',
            'message' => 'Pendaftaran berhasil! Silahkan menunggu email undangan dari kami'
        ]);
    }

    public function registerCelebration(ParticipantCreateRequest $request)
    {
        Participant::create($request->validated());

        return redirect()->route('celebration.index')->with('status', [
            'element' => 'success',
            'message' => 'Pendaftaran berhasil! Silahkan menunggu email undangan dari kami'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $data['events'] = Event::with('participants')->where('is_publish', true)->get();

        return view('admin.pages.participants.index', compact('data'));
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

    public function destroy(Participant $participant)
    {
        $participant->delete();

        return redirect()->route('admin.participants.index')->with('status', [
            'element' => 'success',
            'message' => 'Peserta berhasil dihapus!'
        ]);
    }
}

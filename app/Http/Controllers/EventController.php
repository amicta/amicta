<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data['events'] = Event::where('is_publish', true)->get();

        return view('event', compact('data'));
    }
}

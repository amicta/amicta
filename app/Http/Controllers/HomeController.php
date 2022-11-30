<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            if(Auth::user()->status == 'unverified')
            {
                return redirect()->route('ktm');
            }

            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $user = Auth::user();

        $data['user'] = $user;
        $data['competitions'] = Auth::user()->competitions;
        $data['submissions'] = Auth::user()->submissions;

        return view('pages.dashboard', compact('data', 'user'));
    }
}

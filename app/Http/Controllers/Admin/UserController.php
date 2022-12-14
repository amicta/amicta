<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::with('users')->get();
        return view('admin.pages.users.index', compact('data'));
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

    public function update(Request $request, User $user)
    {
        $user->teams('competition_id', $request->competition_id)->delete();

        $user->competitions()->detach($request->competition_id);

        return redirect()->route('admin.users.index')->with('status', [
            'element' => 'success',
            'message' => 'Peserta Lomba berhasil dihapus!'
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('status', [
            'element' => 'success',
            'message' => 'Akun Peserta berhasil dihapus!'
        ]);
    }

    public function ktm()
    {
        $data['review'] = User::where('status', 'review')->get();
        $data['unverified'] = User::where('status', 'unverified')->get();
        $data['verified'] = User::where('status', 'verified')->get();

        // dd($data);

        return view('admin.pages.users.ktm', compact('data'));
    }
}

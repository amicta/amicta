<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        //
    }

    public function ktm()
    {
        $user = Auth::user();

        // dd($user);

        return view('pages.profile.ktm', compact('user'));
    }

    public function storeKtm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
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

    public function destroy($id)
    {
        //
    }
}

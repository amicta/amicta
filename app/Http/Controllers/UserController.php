<?php

namespace App\Http\Controllers;

use App\Http\Requests\KtmStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        //
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

    public function ktm()
    {
        $user = Auth::user();

        return view('pages.profile.ktm', compact('user'));
    }

    public function storeKtm(KtmStoreRequest $request)
    {
        $user = Auth::user();

        if ($request->hasFile('ktm') && $request->file('ktm')->isValid()) {
            $newFileName = $user->nim .'.'.$request->file('ktm')->extension();

            $user->clearMediaCollection('ktm');
            $user->addMediaFromRequest('ktm')->usingFileName($newFileName)->toMediaCollection('ktm');

            $user->status = 'review';
            $user->save();

            return redirect()->route('home')->with('status', [
                'element' => 'success',
                'message' => 'Berhasil mengupload KTM! KTM kamu akan segera kami verifikasi'
            ]);
        }

        return redirect()->back()->with('status', [
            'element' => 'warning',
            'message' => 'Silahkan upload ulang KTM kamu'
        ]);
    }
}

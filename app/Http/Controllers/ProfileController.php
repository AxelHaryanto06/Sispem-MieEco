<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('profile.index', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->tgl_lahir = $request->input('tgl_lahir');
        $user->jenkel = $request->input('jenkel');
        $user->alamat = $request->input('alamat');
        $user->no_hp = $request->input('no_hp');

        $user->save();
        return redirect('profile')->with('user',$user);
    }
}

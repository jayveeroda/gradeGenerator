<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return view('dashboard.index');
        } else {
            return back()->with('danger', 'Username or password not correct!');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('home');
    }
}

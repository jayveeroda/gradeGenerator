<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    //
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard.index');
        }
        return back();
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        return back()->with('danger', 'Username or password not correct!');
        // return response()->view('index')->header('Cache-Control', 'no-cache');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('home');
    }
}

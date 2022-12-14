<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('signup');
    }


    public function store(Request $request)
    {
        $request->validate([
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        $data = $request->all();
        $this->storing($data);

        return redirect()->route('home')->with('success', 'Account Created!');
    }

    public function storing(array $data)
    {
        return User::create([
            'lastName' => $data['lastName'],
            'firstName' => $data['firstName'],
            'middleName' => $data['middleName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

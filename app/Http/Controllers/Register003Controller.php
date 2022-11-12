<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Register003Controller extends Controller
{
    public function viewregister()
    {
        return view('VIEW-UTS.register003.register003',
        [
            'title' => 'Registration Page',
            'active'=> 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name'=> 'required|max:255',
                'email'   => 'required|email:dns|unique:users',
                'password'=> 'required|max:255'
            ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        //$request->session()->flash('success', 'Registration Successfully, Please Log In!');
        return redirect('/validation003');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login003Controller extends Controller
{
    public function viewlogin()
    {
        return view('VIEW-UTS.login003.login003',
        [
            'title' => 'Log In Page'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'email'   => 'required|email:dns',
                'password'=> 'required'
            ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect()->intended('/profile003');
        }

        return back()->with('loginError', 'Log In Failed!!');
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login003');
    }
}

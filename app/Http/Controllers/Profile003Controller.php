<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data;

class Profile003Controller extends Controller
{
    public function viewprofile()
    {
        return view('VIEW-UTS.profile003.profile003',
        [
            'title'  => 'Profile Page',
            'post'   =>  Data::where('user_id', auth()->user()->id)->get()
        ]);
    }


}

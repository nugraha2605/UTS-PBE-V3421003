<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class Agama003Controller extends Controller
{
    public function viewagama()
    {
        return view('VIEW-UTS.agama003.agama003',
        [
            'title' => 'Agama Page'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama_agama' => 'required'
            ]);

        $validatedData['id'] = auth()->user()->id;

        Agama::create($validatedData);

        return redirect('/user003');
    }
}

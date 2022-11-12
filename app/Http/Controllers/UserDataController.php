<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Data;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function viewprofile()
    {
        return view('VIEW-UTS.profile003.profile003',
        [
            'title'  => 'Profile Page',
            'post'   =>  Data::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function viewvalidation()
    {
        return view('VIEW-UTS.validation003.validation003',
        [
            'title' => 'Validation Page'
        ]);
    }

    public function index()
    {
        return view('VIEW-UTS.user003.user003',
        [
            'title' => 'User Page',
            'posts' =>  Data::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'alamat'       => 'required|max:255',
                'kota_lahir'   => 'required|max:255',
                'tanggal_lahir'=> 'required',
                'umur'         => 'required'
            ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['agama_id']= auth()->user()->id;

        Data::create($validatedData);

        return redirect('/profile003');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        Data::destroy($data->id);

        return redirect('/user003')->with('deleted','Data has been deleted!');
    }
}

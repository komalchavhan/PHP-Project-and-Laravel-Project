<?php

namespace App\Http\Controllers;

use App\Models\NewPassword;
use Illuminate\Http\Request;

class NewPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontends.auth.newpassword');
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
        $request->validate([
            'email'     => 'required',
            'old_password' => 'required',
            'new_password'      => 'required',
            'confirm_password' => 'required'
        ]);

        NewPassword::create($request->all());

        return redirect()->route('index')
                     ->with('success','created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewPassword  $newPassword
     * @return \Illuminate\Http\Response
     */
    public function show(NewPassword $newPassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewPassword  $newPassword
     * @return \Illuminate\Http\Response
     */
    public function edit(NewPassword $newPassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewPassword  $newPassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewPassword $newPassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewPassword  $newPassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewPassword $newPassword)
    {
        //
    }
}

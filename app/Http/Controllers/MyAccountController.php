<?php

namespace App\Http\Controllers;

use App\Models\MyAccount;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myaccount()
    {
        return view('frontends.myaccount'); 
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
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required',
            'address'  => 'required',
            'country' => 'required',
            'state' => 'required',
            'zip'      => 'required',
            'phone' => 'required'
        ]);

        MyAccount::create($request->all());

        return redirect()->route('myaccount')
                     ->with('success','created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyAccount  $myaccount
     * @return \Illuminate\Http\Response
     */
    public function show(MyAccount $myaccount)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyAccount  $myaccount
     * @return \Illuminate\Http\Response
     */
    public function edit(MyAccount $myaccount)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyAccount  $frontendlogin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyAccount $myaccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyAccount  $myaccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyAccount $myaccount)
    {
        //
    }
}

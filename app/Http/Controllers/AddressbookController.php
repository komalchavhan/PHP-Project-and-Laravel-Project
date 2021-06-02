<?php

namespace App\Http\Controllers;

use App\Models\Addressbook;
use Illuminate\Http\Request;

class AddressbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontends.addressbook');
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
        //
        $request->validate([
            'shipping_address' => 'required',
            'billing_address'  => 'required',
            'address'     => 'required'
            
        ]);

        Addressbook::create($request->all());

        return redirect()->route('frontend/addressbook')
                     ->with('success','created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function show(Addressbook $addressbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Addressbook $addressbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addressbook $addressbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Addressbook  $addressbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addressbook $addressbook)
    {
        //
    }
}
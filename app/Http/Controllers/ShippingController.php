<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Shipping;
class ShippingController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
       
        public function shipping()
        {
            return view('frontends.checkout'); 
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
                'display_name' => 'required',
                'user_name'  => 'required',
                'pass'     => 'required',
                'con_pass'  => 'required'
            ]);
    
            Shipping::create($request->all());
    
            return redirect()->route('shipping')
                         ->with('success','created succesfully');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Shipping  $shipping
         * @return \Illuminate\Http\Response
         */
        public function show(Shipping $shipping)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Shipping  $shipping
         * @return \Illuminate\Http\Response
         */
        public function edit(Shipping $shipping)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Shipping  $shipping
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Shipping $shipping)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Shipping  $shipping
         * @return \Illuminate\Http\Response
         */
        public function destroy(Shipping $shipping)
        {
            //
        }
    }
    
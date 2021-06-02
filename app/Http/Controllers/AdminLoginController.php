<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\AdminLogin;
class AdminLoginController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
       
        public function adminlogin(Request $request)
        {
            
            return view('admin.auth.register'); 
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
                'password'  => 'required',
                'retype_password' => 'required',
                'role'      => 'required'
            ]);
    
            AdminLogin::create($request->all());
    
            return redirect()->route('adminlogin')
                         ->with('success','created succesfully');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\AdminLogin  $adminlogin
         * @return \Illuminate\Http\Response
         */
        public function show(AdminLogin $adminlogin)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\AdminLogin  $adminlogin
         * @return \Illuminate\Http\Response
         */
        public function edit(AdminLogin $adminlogin)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\AdminLogin  $adminlogin
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, AdminLogin $adminlogin)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\AdminLogin  $adminlogin
         * @return \Illuminate\Http\Response
         */
        public function destroy(AdminLogin $adminlogin)
        {
            //
        }
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Frontendlogin;
use Illuminate\Support\Facades\Auth;
class FrontendloginController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
       
        public function index(Request $request)
        {
            
            return view('frontends.auth.login'); 
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
                'retypepassword' => 'required',
                'role'      => 'required'
            ]);
    
            Frontendlogin::create($request->all());
    
            return redirect()->route('index')
                         ->with('success','created succesfully');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Frontendlogin  $frontendlogin
         * @return \Illuminate\Http\Response
         */
        public function show(Frontendlogin $frontendlogin)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Frontendlogin  $frontendlogin
         * @return \Illuminate\Http\Response
         */
        public function edit(Frontendlogin $frontendlogin)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Frontendlogin  $frontendlogin
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Frontendlogin $frontendlogin)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Frontendlogin  $frontendlogin
         * @return \Illuminate\Http\Response
         */
        public function destroy(Frontendlogin $frontendlogin)
        {
            //
        }

       public function login(Request $request)
        {
            /* if($request->isMethod('post')){
                $data = $request->all();
                //check if user already exist
                $frontendloginsCount = Frontendlogin::where('email', $data['email'])->count();
                if($frontendloginsCount>0){
                 return redirect()->back()->with('flash_message_error','Email already exists');
                }
            }*/
            return view('frontends.auth.login'); 
        }   
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Logins;
class LoginsController extends Controller
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
    
            Logins::create($request->all());
    
            return redirect()->route('index')
                         ->with('success','created succesfully');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Logins  $logins
         * @return \Illuminate\Http\Response
         */
        public function show(Logins $logins)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Logins  $logins
         * @return \Illuminate\Http\Response
         */
        public function edit(Logins $logins)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Logins  $logins
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Logins $logins)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Logins  $logins
         * @return \Illuminate\Http\Response
         */
        public function destroy(Logins $logins)
        {
            //
        }

       public function login(Request $request)
        {
            /* if($request->isMethod('post')){
                $data = $request->all();
                //check if user already exist
                $loginsCount = logins::where('email', $data['email'])->count();
                if($loginsCount>0){
                 return redirect()->back()->with('flash_message_error','Email already exists');
                }
            }*/
            return view('frontends.auth.login'); 
        }
    
        public function myaccount()
        {
            $logins = Logins::select('id','firstname','lastname','email')->get();
            //$logins=Logins::find($id);
            return view('frontends.myaccount')->with(compact('logins'));
       }
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
class UsersController extends Controller
{
    //
   /* public function register(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            //echo '<pre>';print_r($data);die;
            $usersCount = User::where('email', $data['email'])->count();
            if($usersCount>0)
            {
            return redirect()->back()->with('flash_message_error','Email already exists!');
            }
        }
        return view('users.login_register');
    }*/
}

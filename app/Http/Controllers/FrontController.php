<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Frontendlogin;
class FrontController extends Controller
{
    public function index()
    {
    return view('frontends.layouts.index');
    }
    public function blog()
    {
        return view('frontends.blog');
    }
    public function blogsingle()
    {
        return view('frontends.blogsingle');
    }
    public function cart()
    {
        return view('frontends.cart');
    }
    public function category()
    {
        return view('frontends.category');
    }
    public function contactus()
    {
        return view('frontends.contactus');
    }
    public function shop()
    {
        return view('frontends.shop');
    }
    public function error()
    {
        return view('frontends.error');
    }


    public function forgotpassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            /*echo "<pre>"; print_r($data);die;*/
            $userCount =Frontendlogin::where('email',$data['email'])->count();
            if($userCount==0){
                return redirect()->back()->with('flash_message_success','Email does not exists!');
            }
            //Get user details
            $userDetails=Frontendlogin::Where('email',$data['email'])->first();
            //Generate random password
             $random_password=Str::random(8);
             //Encode secure passwords
             $new_password=bcrypt($random_password);
        }
        return view('frontends.auth.forgotpassword');
    }


    public function reset_password()
    {
        return view('frontends.auth.reset_password');
    }
    public function login()
    {
        return view('frontends.auth.login');
    }
    public function newpassword()
    {
        return view('frontends.auth.newpassword');
    }
}
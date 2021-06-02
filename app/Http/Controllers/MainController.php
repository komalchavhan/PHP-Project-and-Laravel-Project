<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MainController extends Controller
{
    //
    public function login()
    {
        return view('admin.auth.login');
    } 
    public function register()
    {
        return view('admin.auth.register');
    }
    
    public function app()
    {
        return view('admin.layouts.app');
    }
    public function forgotpassword()
    {
        return view('frontends.auth.forgotpassword');
    }
    public function myaccount()
    {
    return view('myaccount');
    }
   
}
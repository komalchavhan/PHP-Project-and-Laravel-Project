<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FrontendController extends Controller
{
    public function index()
    {
        return view('frontends.layouts.index');
    }
    public function app()
    {
        return view('frontends.layouts.app');
    }
    public function contactus()
    {
        return view('frontends.contactus');
    }
    public function checkout()
    {
        return view('frontends.checkout');
    }
    public function reset_password()
    {
        return view('frontends.auth.reset_password');
    }
    /*public function index()
    {
        return view('frontends.layouts.index');
    }*/
    public function addressbook()
    {
        return view('frontends.addressbook');
    }
   public function category()
    {
        return view('frontends.category');
    }
    public function cart()
    {
        return view('frontends.cart');
    }
    public function error()
    {
        return view('frontends.error');
    }
    public function login()
    {
        return view('frontends.auth.login');
    }
    public function blog()
    {
        return view('frontends.blog');
    }
    public function blogsingle()
    {
        return view('frontends.blogsingle');
    }
    public function product_details()
    {
        return view('frontends.product_details');
    }
    public function shop()
    {
        return view('frontends.shop');
    }
    public function myaccount()
    {
        return view('frontends.myaccount');
    }
    
    public function productdetails()
    {
        return view('frontends.productdetails');
    }
}

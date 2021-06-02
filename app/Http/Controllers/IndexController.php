<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Cms;
use Illuminate\Support\Facades\Mail;
//use App\Models\Cart;
class IndexController extends Controller
{
    public function category()
    {
     $categories = Category::select('id','name')->get();
     $products= Product::select('id','product_name','image','price')->get();
     $banners = Banner::select('id','title','image','link')->get();
     return view('frontends.layouts.index')->with(compact('categories','products','banners'));
    }
    public function productdetails($id=null)
    {
     $productdetails=Product::find($id);
     return view('frontends.productdetails')->with(compact('productdetails'));
    }   
    public function app()
    {
      return view('frontends.layouts.app');
    }

    public function contactus(Request $request)
    {
      if($request->isMethod('post')){
      $data = $request->all();
      /*echo "<pre>";print_r($data);die;*/
      //send contact email
      $email ="chitrachavhan777@gmail.com";
      $messageData=[
        'name' =>$data['name'],
        'email' =>$data['email'],
        'subject' =>$data['subject'],
        'comment' =>$data['message']
      ];
      Mail::send('frontends.auth.enquiry',$messageData,function($message)use($email){
        $message->to($email)->subject('Enquiry from E-com Website');
      });
      //echo "test"; die;
      return redirect()->back()->with('flash_message_success','Thank you for your enquiry. we will back soon!');
      }
      return view('frontends.contactus');
    }

    public function enquiry()
    {
      return view('frontends.auth.enquiry');
    }

    /*public function cms_page($url)
    {
     $cmsPageDetails = Cms::where('url', $url)->get();
     //$cmsPageDetails= Cms::select('id','title','url','status','description')->get();
     return view('frontends.cms_page')->with(compact('cmsPageDetails'));
    }  
    public function cmsPage($url)
    {
    $cmsPageDetails= Cms::where('url',$url)->first();
     return view('pages.cms_page')->with(compact('cmsPageDetails'));
    }*/ 

    
}
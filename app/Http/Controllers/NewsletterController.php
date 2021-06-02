<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
   public function checkSubscriber(Request $request)
   {
       if($request->ajax()){
           $data = $request->all();
           echo "<pre>"; print_r($data);die;
       }
   }
}

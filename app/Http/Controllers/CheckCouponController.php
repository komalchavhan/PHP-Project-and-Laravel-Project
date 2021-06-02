<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Cart;
use FrontendloginController;
use Illuminate\Support\Facades\DB;
use App\Models\Frontendlogin;

class CheckCouponController extends Controller
{
    

public function checkCoupon(Request $res)
{
    $code = $res->input('code');
    $userId = Frontendlogin::user()->id;

    if(!$code){
        return ['error' => '<div class="alert alert-danger">Please Insert The Coupon Code </div>'];
    }

    $coupon = DB::table('coupons')
            ->where('coupon_code', $code)
            ->first();

    if(!$coupon) {
        return ['error' => '<div class="alert alert-danger">Wrong Coupon Code Entered</div>'];
    }

    $isUsed = DB::table('used_coupons')
            ->where('user_id', $userId)
            ->where('coupon_id', $coupon->id)
            ->exists();

    if($isUsed){
        return ['error' => '<div class="alert alert-warning">This Coupon Have Already Used</div>'];
    }

    DB::table('used_coupons')
        ->insert([
            'coupon_id' => $coupon->id,
            'user_id' => $userId
        ]);

   
}
}
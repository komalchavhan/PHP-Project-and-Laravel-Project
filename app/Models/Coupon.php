<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    public $timestamps = true;

    protected $casts = [
        'coupon_amount' => 'double'
    ];

    protected $fillable = [
        'coupon_code',
        'coupon_amount',
        'amount_type',
        'expiry_date'
    ];
}
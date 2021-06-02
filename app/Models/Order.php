<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = [
    'frontendlogin_id',
    'frontendlogin_email',
    'firstname',
    'lastname',
    'address',
    'city',
    'state',
    'pincode',
    'country',
    'mobile',
    'shipping_charges',
    'coupon_code',
    'coupon_amount',
    'order_status',
    'payment_method',
    'grand_total'
    ];
}

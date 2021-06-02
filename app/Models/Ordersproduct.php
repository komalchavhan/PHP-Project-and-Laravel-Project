<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordersproduct extends Model
{
    use HasFactory;
    protected $table = 'orders_products';
    public $timestamps = true;
    protected $fillable = [
    'order_id',
    'frontendlogin_id',
    'product_id',
    'product_code',
    'product_name',
    'product_size',
    'product_price',
    'product_qty'
    ];
}

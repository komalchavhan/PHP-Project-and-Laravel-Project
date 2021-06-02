<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;

    protected $casts = [
        'price' => 'double'
    ];

    protected $fillable = [
        'product_name', 
        'product_code',
        'product_color', 
        'size',
        'price',
        'quantity',
        'user_email',
        'session_id',
        'image'
    ];

}

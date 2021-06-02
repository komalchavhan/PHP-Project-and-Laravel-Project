<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    public $timestamps = true;
    protected $fillable = [
      'product_id',
      'product_name',
      'product_code',
      'product_color',
      'size',
      'price',
      'quantity',
      'user_email',
      'session_id'
      
    ];
    
}


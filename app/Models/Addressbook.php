<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addressbook extends Model
{
    use HasFactory;
    protected $table = 'addressbooks';
    public $timestamps = true;
    protected $fillable = [
        'shipping_address',
        'billing_address',
        'address'  
    ];
}
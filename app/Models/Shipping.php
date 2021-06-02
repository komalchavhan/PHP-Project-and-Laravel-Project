<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $table = 'shippings';
    public $timestamps = true;

    protected $fillable = [
        'display_name',
        'user_name',
        'pass',
        'con_pass'
    ];
}
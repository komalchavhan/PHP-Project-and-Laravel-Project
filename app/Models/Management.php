<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Management extends Model
{
    use HasFactory;
    protected $table = 'managements';
    public $timestamps = true;
    protected $fillable = [
    'order_id',
    'firstname' ,
    'lastname' ,
    'address',
    'city' ,
    'pincode',
    'country',
    'mobile',
    'payment_method',
    'grand_total',
    'status'
    ];
}
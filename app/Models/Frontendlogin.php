<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontendlogin extends Model
{
    use HasFactory;
    protected $table = 'frontendlogins';
    public $timestamps = true;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'retypepassword',
        'role'
    ];
}
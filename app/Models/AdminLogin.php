<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLogin extends Model
{
    use HasFactory;
    protected $table = 'registers';
    public $timestamps = true;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'retype_password',
        'role'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM extends Model
{
    use HasFactory;
    protected $table = 'usermanagements';
    public $timestamps = true;

    protected $fillable = 
    [
        'firstname',
        'lastname',
        'email',
        'password',
        'confirmpassword',
        'status',
        'role'
    ];
}

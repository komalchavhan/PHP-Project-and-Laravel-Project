<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPassword extends Model
{
    use HasFactory;
    protected $table = 'passwords';
    public $timestamps = true;
    protected $fillable = [
        'email',
        'old_password',
        'new_password',
        'confirm_password'
        
    ];
}

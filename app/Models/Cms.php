<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;
    protected $table = 'cmspages';
    public $timestamps = true;
    protected $fillable = [
        'title' ,
        'description',
        'url',
        'status'
    ];
}

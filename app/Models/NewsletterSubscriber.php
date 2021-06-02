<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    use HasFactory;
    protected $table = 'newsletter_subscribers';
    public $timestamps = true;
    protected $fillable = [
    'email',
    'status'
    ];
}

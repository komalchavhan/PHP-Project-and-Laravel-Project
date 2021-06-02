<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $table = 'checks';
    public $timestamps = true;
    protected $fillable = [
    'company_name',
    'email',
    'title',
    'first_name',
    'middle_name',
    'last_name',
    'address1',
    'address2',
    'zip_code',
    'country',
    'state',
    'confirm_password',
    'phone_no',
    'mobile_no',
    'fax'
        ];
}

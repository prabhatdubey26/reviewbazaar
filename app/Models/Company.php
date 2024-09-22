<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'logo',
        'about',
        'verified',
        'website_url',
        'email',
        'phone',
        'address',
        'country',
        'city',
        'zip',
        'category',
        'status',
    ];
}

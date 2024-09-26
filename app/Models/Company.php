<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

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
    // In Company.php
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category', 'id');
    }

}

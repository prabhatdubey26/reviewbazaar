<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category; // Ensure this import is present

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


    public function getCategoryNamesAttribute()
    {
        return $this->getCategoryValue($this->category);
    }

    protected function getCategoryValue($value)
    {
        if (empty($value)) {
            return [];
        }
        
        $categoryIds = explode(',', $value);
        return Category::whereIn('id', $categoryIds)->pluck('name')->toArray(); 
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'company_id', 'id')->latest();
    }

    public function reviewCount()
    {
        return $this->reviews()->count();
    }

    public function getReviews()
    {
        return $this->reviews;
    }

    public function averageRating()
    {
        return number_format($this->reviews()->avg('review') ?? 0, 2, '.', '');
    }

}

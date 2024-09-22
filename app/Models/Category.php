<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
    
class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'is_parent', 'status'];

    protected $hidden = ['children'];


    // Mutator to create a slug
    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);
        $originalSlug = $slug;

        $i = 1;
        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }

        $this->attributes['slug'] = $slug;
    }

    // public function subcategories()
    // {
    //     return $this->hasMany(Category::class, 'is_parent', 'id');
    // }

    // Relation to get the parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'is_parent');
    }
}

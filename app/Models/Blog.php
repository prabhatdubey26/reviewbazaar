<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category_id', 'slug', 'image', 'description', 'meta_description', 'meta_title', 'meta_key', 'status'];


    public function setSlugAttribute($value)
    {
        $slug = Str::slug($value);
        $originalSlug = $slug;

        // Generate a unique slug only if the title is being changed
        if ($this->exists && $this->isDirty('title')) {
            // Ensure slug is unique
            $i = 1;
            while (self::where('slug', $slug)->where('id', '!=', $this->id)->exists()) {
                $slug = $originalSlug . '-' . $i;
                $i++;
            }
        }

        // Assign the unique slug to the attribute
        $this->attributes['slug'] = $slug;
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

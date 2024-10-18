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
        if ($this->exists && !$this->isDirty('slug')) {
            // If not creating or slug isn't dirty, return
            return;
        }
        $i = 1;
        while (self::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i;
            $i++;
        }

        $this->attributes['slug'] = $slug;
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

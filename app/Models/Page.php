<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'description', 'status'];

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
}

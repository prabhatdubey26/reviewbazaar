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

    // Relation to get the parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'is_parent');
    }

    public function companies()
{
    return Company::whereRaw('FIND_IN_SET(?, category)', [$this->id]);
}

public function companyCount()
{
    return $this->companies()->count();
}

}

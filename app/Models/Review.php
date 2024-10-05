<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'company_id',
        'name',
        'email',
        'phone',
        'review',
        'comment',
    ];

    /**
     * Get the user that owns the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the company that the review belongs to.
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

}

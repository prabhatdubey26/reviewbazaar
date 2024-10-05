<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'social_id',
        'social_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the initials of the user's name.
     *
     * @return string
     */
    public function getInitials()
    {
        // Get the user's name
        $userName = $this->name;

        // Split the name into words, and get the first letter of each word
        $initials = collect(explode(' ', $userName))
            ->take(2)
            ->map(fn($word) => strtoupper(substr($word, 0, 1)))  // Get first letter and convert to uppercase
            ->implode('');  // Combine the initials

        return $initials;
    }
}

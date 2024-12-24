<?php

namespace App\Models\UserManagement;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids;

    // Specify that we're not using auto-incrementing ID
    public $incrementing = false;

    // Specify UUID data type as string
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'sex',
        'email',
        'email_verified_at',
        'phone',
        'password',
    ];

    /**
     * Boot the model and define events for attribute handling.
     *
     * Allowing us to automatically set the `user_sequence` and generate
     * A formatted `user_id` before a new User record is saved to the database.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Generate the next user sequence
            $user->user_sequence = static::max('user_sequence') + 1;

            // Format the user_id
            $user->user_id = 'USER-' . str_pad($user->user_sequence, 10, '0', STR_PAD_LEFT);
        });
    }

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
}

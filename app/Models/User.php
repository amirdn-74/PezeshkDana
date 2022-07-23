<?php

namespace App\Models;

use Error;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['role', 'remember_token', 'email_verified_at'];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is($roles): bool
    {
        if (is_array($roles)) return in_array($this->role, $roles);
        else if (gettype($roles) === 'string') return $this->role === $roles;
        else throw new Error('role must be of type string or array of strings');
    }

    public function isNot($roles): bool
    {
        return !$this->is($roles);
    }
}

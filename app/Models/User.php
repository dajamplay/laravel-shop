<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use App\Notifications\ResetPasswordEmail;
use App\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Filterable;

    const ROLE_SUPER_ADMIN = 7;
    const ROLE_USER = 1;

    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'registered_at',
        'birthday',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'registered_at' => 'datetime',
        'birthday' => 'datetime',
        'password' => 'hashed',
    ];

    public function sendEmailVerificationNotification(): void
    {
        $this->notify(new VerifyEmail);
    }

    public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPasswordEmail($token));
    }

    public function getFullNameAttribute(): string
    {
        return "$this->first_name $this->last_name";
    }
}

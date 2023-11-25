<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ROLE_USER = 1;
    const ROLE_COSMETOLOGIST = 2;
    const ROLE_MANAGER = 6;
    const ROLE_ADMIN = 7;
    const ROLE_BAN = 9;

    protected $fillable = [
        'id',
        'title',
    ];

    protected $casts = [
        'created_at' => "datetime:Y-m-d H:i:s",
        'updated_at' => "datetime:Y-m-d H:i:s",
    ];
}

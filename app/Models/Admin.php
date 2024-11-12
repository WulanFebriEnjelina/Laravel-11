<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;

    // Tentukan guard yang digunakan untuk model ini
    protected $guard = 'admin';
    protected $fillable = [
        'name', 'username', 'email', 'password'
    ];

}

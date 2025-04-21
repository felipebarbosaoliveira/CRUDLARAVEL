<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Campos que devem ser ocultados ao retornar JSON, por exemplo
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts automáticos para atributos (ex: transformar em datetime)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class User extends AuthenticatableUser implements Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'email',
        'job',
        'password',
        'phonenumber',
        'isadmin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
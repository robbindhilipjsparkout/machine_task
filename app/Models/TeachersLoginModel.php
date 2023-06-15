<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Auth\Authenticatable;

class TeachersLoginModel extends Model implements 
\Illuminate\Contracts\Auth\Authenticatable


{
    use Authenticatable;


    protected $table = 'teachers_login';


    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
        'original_password',
    ];

    protected $hidden = [
        'password',
 
    ];
}
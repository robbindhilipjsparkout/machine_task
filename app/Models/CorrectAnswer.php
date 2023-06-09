<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class CorrectAnswer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'correct_answer';


    protected $fillable = [
        'questions_id',
        'correctanswer',
        
    
    ];

}

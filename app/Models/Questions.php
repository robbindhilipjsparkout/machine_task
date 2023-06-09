<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Options;
use App\Models\CorrectAnswer;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Questions extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
    * The database table used by the model.
    *
    * @var string
    */
   protected $table = 'questions';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */


    protected $fillable = [
        'questions',
    
    ];


    public function QuestionToOption()
    {
        return $this->hasMany(Options::class, 'question_id', 'id');
    }
 


    public function QuestionToCorrectAnswer()
    {
        return $this->hasMany(CorrectAnswer::class, 'questions_id', 'id');
    }
 
}
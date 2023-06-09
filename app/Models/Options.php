<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Options extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
    * The database table used by the model.
    *
    * @var string
    */
   protected $table = 'options';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */


    protected $fillable = [
        'option1',
        'option2',
        'question_id',
    
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
 
    protected $table = 'quizes';

    protected $fillable =[
        'quiz_name',
        'lesson_id',
        'description',
        'quiz_time',
        'quiz_date',
        'status',
        'number_of_question',
    ];
}

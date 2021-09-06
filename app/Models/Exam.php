<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = "exams";

    protected $fillable = [
        'user_id',
        'question_id',
        'quizes_id',
        'ans',
        'is_ans',
        'status',
    ];
}

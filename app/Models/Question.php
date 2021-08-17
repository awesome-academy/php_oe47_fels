<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'lesson_id',
        'question',
        'answer',
    ];

    public function lessons()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}

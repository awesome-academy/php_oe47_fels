<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';

    protected $fillable=[
        'questions_id',
        'option',
        'status',
    ];
    
    public function quizes()
    {
        return $this->belongsTo(Quiz::class);
    }
}

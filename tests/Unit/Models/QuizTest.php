<?php

namespace Tests\Unit\Models;

use App\Models\Quiz;
use Tests\ModelsTestCase;
use Illuminate\Support\Facades\Schema;

class QuizTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testImageConfiguration()
    {
        $this->runConfigurationAssertions(new Quiz(), [
            'quiz_name',
            'lesson_id',
            'description',
            'quiz_time',
            'quiz_date',
            'status',
            'number_of_question',
        ]);
    }
}

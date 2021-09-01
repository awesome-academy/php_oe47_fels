<?php

namespace Tests\Unit\Models;

use App\Models\Question;
use App\Models\Option;
use App\Models\Quiz;
use Tests\ModelsTestCase;

class QuestionTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCourseConfiguration()
    {
        $this->runConfigurationAssertions(new Question(), [
            'quizes_id',
            'question',
            'answer',
            'status',
            'options',
            'note',
        ]);
    }

    public function testQuestionHasManyOptionRelationship()
    {
        $model = new Question();

        $relation = $model->optionsdata();

        $this->assertHasManyRelation($relation, $model, new Option(), 'questions_id');
    }

    public function testQuestionBelongtoQuizRelationship()
    {
        $model = new Question();

        $relation = $model->quizes();

        $this->assertBelongsToRelation($relation, $model, new Quiz(), 'quizes_id');
    }
}

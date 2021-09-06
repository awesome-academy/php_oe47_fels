<?php

namespace Tests\Unit\Models;

use App\Models\Result;
use App\Models\User;
use App\Models\Quiz;
use Tests\ModelsTestCase;

class ResultTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testResultConfiguration()
    {
        $this->runConfigurationAssertions(new Result(), [
            'user_id',
            'quizes_id',
            'total_mark',
            'yes_ans',
            'no_ans',
            'date',
            'status',
            'result_json',
        ]);
    }

    public function testResultBelongtoUserRelationship()
    {
        $model = new Result();
        
        $relation = $model->user();

        $this->assertBelongsToRelation($relation, $model, new User(), 'user_id');
    }

    public function testResultBelongtoQuizesRelationship()
    {
        $model = new Result();
        
        $relation = $model->quizes();

        $this->assertBelongsToRelation($relation, $model, new Quiz(), 'quizes_id');
    }
}

<?php

namespace Tests\Unit\Models;

use App\Models\Option;
use App\Models\Quiz;
use Tests\ModelsTestCase;

class OptionTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testOptionConfiguration()
    {
        $this->runConfigurationAssertions(new Option(), [
            'questions_id',
            'option',
            'status',
        ]);
    }

    public function testOptionBelongtoQuizRelationship()
    {
        $model = new Option();
        
        $relation = $model->quizes();

        $this->assertBelongsToRelation($relation, $model, new Quiz(), 'quizes_id');
    }
}

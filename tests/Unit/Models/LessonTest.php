<?php

namespace Tests\Unit\Models;

use App\Models\Lesson;
use App\Models\User;
use App\Models\Word;
use Tests\ModelsTestCase;

class LessonTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLessonConfiguration()
    {
        $this->runConfigurationAssertions(new Lesson(), [
            'name',
            'course_id',
        ]);
    }

    public function testLessonHasManyWordRelationship()
    {
        $model = new Lesson();

        $relation = $model->words();

        $this->assertHasManyRelation($relation, $model, new Word());
    }

    public function testLessonBelongtoManyUserRelationship()
    {
        $model = new Lesson();

        $relation = $model->users();

        $this->assertBelongsToManyRelation($model, 'user_lesson.lesson_id', 'user_lesson.user_id', $relation);
    }
}

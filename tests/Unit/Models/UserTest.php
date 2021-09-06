<?php

namespace Tests\Unit\Models;

use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tests\ModelsTestCase;

class UserTest extends ModelsTestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserConfiguration()
    {
        $this->runConfigurationAssertions(new User(), [
            'name',
            'email',
            'password',
            'role',
        ]);
    }

    public function testUserMorphOneImageRelationship()
    {
        $model = new User();

        $relation = $model->images();

        $this->assertMorphOneRelation('imgable_type', 'imgable_id', $relation);
    }

    public function testCourseBelongtoManyCourseRelationship()
    {
        $model = new User();
        
        $relation = $model->courses();

        $this->assertBelongsToManyRelation($model, 'user_course.user_id', 'user_course.course_id', $relation);
    }

    public function testUserBelongtoManyLessonRelationship()
    {
        $model = new User();

        $relation = $model->lessons();

        $this->assertBelongsToManyRelation($model, 'user_lesson.user_id', 'user_lesson.lesson_id', $relation);
    }
}

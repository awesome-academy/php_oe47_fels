<?php

namespace App\Repository\Course;

use App\Models\Course;
use App\Repository\BaseRepository;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    public function __construct(Course $course)
    {
        parent::__construct($course);
    }
}

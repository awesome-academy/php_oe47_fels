<?php

namespace App\Http\Controllers;

use App\Repository\Lesson\LessonRepositoryInterface;
use App\Repository\Course\CourseRepositoryInterface;
use App\Repository\Word\WordRepositoryInterface;

class HomeController extends Controller
{

    protected $lessonRepository;
    protected $courseRepository;
    protected $wordRepository;

    public function __construct(
        LessonRepositoryInterface $lessonRepository,
        CourseRepositoryInterface $courseRepository,
        WordRepositoryInterface $wordRepository
    ) {
        $this->lessonRepository = $lessonRepository;
        $this->courseRepository = $courseRepository;
        $this->wordRepository = $wordRepository;
    }

    public function index()
    {
        return view('pages.user.home');
    }

    public function showCourse()
    {
        $courses= $this->courseRepository->getWith('image');
        if ($courses) {
            return view('pages.user.courses_list', compact('courses'));
        }

        return back()->withError('notfound');
    }

    public function showLesson($id)
    {
        $lessons= $this->lessonRepository->findWhere('course_id', $id);
        $course= $this->courseRepository->find($id);
        
        return view('pages.user.lesson_list', compact('lessons', 'course'));
    }
}

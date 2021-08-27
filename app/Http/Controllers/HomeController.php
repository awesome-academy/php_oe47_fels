<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class HomeController extends Controller
{
    public function showCourse()
    {
        $courses=Course::with('image')->orderBy('created_at')->get();

        return view('pages.user.courses_list', compact('courses'));
    }

    public function showLesson($id)
    {
        $lessons=Lesson::orderBy('id', 'asc')->where('course_id', $id)->get();
        $course=Course::where('id', $id)->first();
        
        return view('pages.user.lesson_list', compact('lessons', 'course'));
    }
}

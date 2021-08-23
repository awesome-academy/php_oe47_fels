<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function showCourse()
    {
        $courses=Course::with('image')->orderBy('created_at')->get();

        return view('pages.user.courses_list', compact('courses'));
    }
}

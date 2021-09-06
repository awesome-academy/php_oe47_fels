<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizes= Quiz::orderBy('id', 'asc')->listPaginate(config('quiz.paginate_quiz_exam'));

        return view('pages.user.exam.quiz_list', compact('quizes'));
    }
}

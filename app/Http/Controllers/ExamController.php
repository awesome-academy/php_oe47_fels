<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Exam;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
use App\Enums\QuizStatus;

class ExamController extends Controller
{
    public function exam($id)
    {
        $quiz=Quiz::where('id', $id)->where('status', 'active')->first();
        $questions=Question::inRandomOrder()->limit($quiz->number_of_question)->where('quizes_id', $quiz->id)->get();

        return view('pages.user.exam.exam', compact('questions', 'quiz'));
    }

    public function examResult()
    {
        $userId=Auth::id();
        $results=Result::orderBy('id', 'desc')->where('user_id', $userId)->get();
      
        return view('pages.user.exam.result', compact('results'));
    }

    public function resultDetails($id)
    {
        $userId=Auth::user()->id;
        $exams=Exam::where('user_id', $userId)->where('quizes_id', $id)->get();
        $quiz=Quiz::find($id);
        $questions=Question::where('quizes_id', $id)->get();

        return view('pages.user.exam.resultDetails', compact('exams', 'quiz', 'questions'));
    }
}

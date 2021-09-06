<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Exam;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function resultDetails($id)
    {
        $userId=Auth::user()->id;
        $exams=Exam::where('user_id', $userId)->where('quizes_id', $id)->get();
        $quiz=Quiz::find($id);
        $questions=Question::where('quizes_id', $id)->get();

        return view('pages.user.exam.resultDetails', compact('exams', 'quiz', 'questions'));
    }
}

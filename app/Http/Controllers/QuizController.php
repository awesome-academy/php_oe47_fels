<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Repository\Quiz\QuizRepositoryInterface;

class QuizController extends Controller
{
    protected $quizRepository;

    public function __construct(
        QuizRepositoryInterface $quizRepository
    ) {
        $this->quizRepository = $quizRepository;
    }

    public function index()
    {
        $quizes= $this->quizRepository->orderBy('id', 'asc');
        if ($quizes) {
            return view('pages.user.exam.quiz_list', compact('quizes'));
        }

        return back()->withError('notFound');
    }
}

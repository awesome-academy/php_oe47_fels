<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Word;
use App\Repository\Word\WordRepositoryInterface;

class LessonController extends Controller
{
    protected $wordRepository;

    public function __construct(
        WordRepositoryInterface $wordRepository
    ) {
        $this->wordRepository = $wordRepository;
    }

    public function showLessonDetail($id)
    {
        $words = $this->wordRepository->findWhere('lesson_id', $id);
        if ($words) {
            return view('pages.user.lesson_detail', compact('words'));
        }

        return back()->withError('notFound');
    }
}

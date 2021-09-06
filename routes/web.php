<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.user.home');
})->name('home');

Route::get('change-language/{language}', [LanguageController::class, 'index'])->name('change-language');

Route::resource('login', LoginController::class);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('register', RegisterController::class);

Route::get('/course-list', [HomeController::class, 'showCourse'])->name('course.list');

//Google login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/lesson-list/{id}', [HomeController::class, 'showLesson'])->name('lesson.list');
    Route::get('/lesson-detail/{id}', [LessonController::class, 'showLessonDetail'])->name('lesson.detail');
    Route::get('quizes_list', [QuizController::class, 'index'])->name('quiz_list');
    Route::post('/exams', [ExamController::class, 'examPost'])->name('exams');
    Route::get('/exam-start/{id}', [ExamController::class, 'exam'])->name('exam.start');
    Route::get('/exam-result', [ExamController::class, 'examResult'])->name('exam.result');
    Route::get('/result-detail/{id}', [ExamController::class, 'resultDetails'])->name('exam.resultDetail');
});

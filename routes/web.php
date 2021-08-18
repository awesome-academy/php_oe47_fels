<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

Route::get('/course', function () {
    return view('pages.user.courses_list');
})->name('course');

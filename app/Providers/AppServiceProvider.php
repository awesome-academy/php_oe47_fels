<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repository\Word\WordRepositoryInterface::class,
            \App\Repository\Word\WordRepository::class
        );

        $this->app->singleton(
            \App\Repository\Course\CourseRepositoryInterface::class,
            \App\Repository\Course\courseRepository::class
        );

        $this->app->singleton(
            \App\Repository\Lesson\LessonRepositoryInterface::class,
            \App\Repository\Lesson\LessonRepository::class
        );

        $this->app->singleton(
            \App\Repository\Exam\ExamRepositoryInterface::class,
            \App\Repository\Exam\ExamRepository::class
        );

        $this->app->singleton(
            \App\Repository\Question\QuestionRepositoryInterface::class,
            \App\Repository\Question\QuestionRepository::class
        );

        $this->app->singleton(
            \App\Repository\Quiz\QuizRepositoryInterface::class,
            \App\Repository\Quiz\QuizRepository::class
        );

        $this->app->singleton(
            \App\Repository\Result\ResultRepositoryInterface::class,
            \App\Repository\Result\ResultRepository::class
        );

        $this->app->singleton(
            \App\Repository\User\UserRepositoryInterface::class,
            \App\Repository\User\UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

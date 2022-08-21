<?php

namespace App\Providers;


use App\Repository\StudentRepository;

use App\Repository\IStudentRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\StudentMarkRepository;
use App\Repository\IStudentMarkRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IStudentRepository::class, StudentRepository::class);
        $this->app->bind(IStudentMarkRepository::class, StudentMarkRepository::class);
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

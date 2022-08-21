<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentMarkController;

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
    return view('welcome');
});


Route::get('/students',[StudentController::class,'studentGetAllLists'])->name('students.index');

Route::get('/students/create',[StudentController::class,'create'])->name('students.create');

Route::post('/students/store',[StudentController::class,'store'])->name('students.store');

Route::get('/students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');

Route::post('/students/update/{id}',[StudentController::class,'update'])->name('students.update');

Route::delete('/students/{id}',[StudentController::class,'delete'])->name('students.delete');


Route::get('/students/marks',[StudentMarkController::class,'studentGetMarkLists'])->name('students.mark.index');

Route::get('/students/marks/create',[StudentMarkController::class,'create'])->name('students.mark.create');

Route::post('/students/marks/store',[StudentMarkController::class,'store'])->name('students.mark.store');

Route::get('/students/marks/edit/{id}',[StudentMarkController::class,'edit'])->name('students.mark.edit');

Route::post('/students/marks/update/{id}',[StudentMarkController::class,'update'])->name('students.mark.update');

Route::delete('/students/marks/{id}',[StudentMarkController::class,'delete'])->name('students.mark.delete');



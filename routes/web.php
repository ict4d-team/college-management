<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, "index"])->name('index');

Route::group(['prefix' => 'teachers'], function(){
    Route::get('/', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/add', [TeacherController::class, 'add'])->name('teachers.add');
});

Route::group(['prefix' => 'students'], function(){
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/add', [StudentController::class, 'add'])->name('students.add');
});

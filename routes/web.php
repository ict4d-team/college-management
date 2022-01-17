<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ParentController;
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

Route::group(['prefix' => 'students'], function(){
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/add', [StudentController::class, 'add'])->name('students.add');
    Route::post('/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('/delete/{student_id}', [StudentController::class, 'delete'])->name('students.delete');
    Route::get('/{student_id}', [StudentController::class, 'details'])->name('students.details');
});

Route::group(['prefix' => 'teachers'], function(){
    Route::get('/', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/add', [TeacherController::class, 'add'])->name('teachers.add');
    Route::post('/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::get('/delete/{teacher_id}', [TeacherController::class, 'delete'])->name('teachers.delete');
    Route::get('/{teacher_id}', [TeacherController::class, 'details'])->name('teachers.details');
});

//Route::group(['prefix' => 'parents'], function(){
//    Route::get('/', [ParentController::class, 'index'])->name('parents.index');
//    Route::get('/add', [ParentController::class, 'add'])->name('parents.add');
//    Route::get('/create', [ParentController::class, 'create'])->name('parents.create');
//    Route::get('/{parent_id}', [ParentController::class, 'details'])->name('parents.details');
//});

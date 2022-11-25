<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Route::get('/', [StudentController::class, 'index']);

Route::get('/student/create', [StudentController::class, 'create']);

Route::get('/student/{student}', [StudentController::class, 'show']);

Route::get('/student/edit/{student}', [StudentController::class, 'edit']);

Route::post('/student', [StudentController::class, 'store']);

Route::put('/student/{students}', [StudentController::class, 'update']);

Route::delete('/student/{students}', [StudentController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

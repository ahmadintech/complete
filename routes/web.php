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

Route::get('/student/edit/{student}', [StudentController::class, 'edit']);

Route::put('/student/{student}', [StudentController::class, 'update']);

Route::post('/student', [StudentController::class, 'store']);

Route::get('/student/{student}', [StudentController::class, 'show']);



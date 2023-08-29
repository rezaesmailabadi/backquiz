<?php

use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use App\Http\Controllers\StudentOperation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/register-user', [AuthRegisteredUserController::class, 'store']);
// register-user



Route::post('/admin/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/add_new_category', [AdminController::class, 'add_new_category']);
Route::post('/add_new_type', [AdminController::class, 'add_new_type']);
Route::get('/exam_category', [AdminController::class, 'exam_category']);
// exam_type
Route::get('/exam_type', [AdminController::class, 'exam_type']);
Route::get('/manage_exam', [AdminController::class, 'manage_exam']);
Route::post('/add_new_exam', [AdminController::class, 'add_new_exam']);
Route::get('/add_questions/{id}', [AdminController::class, 'add_questions']);
Route::post('/add_new_question', [AdminController::class, 'add_new_question']);

Route::post('/order_exam', [StudentOperation::class, 'order_exam']);
Route::get('/join_exam/{id}', [StudentOperation::class, 'join_exam']);
Route::post('/submit_questions', [StudentOperation::class, 'submit_questions']);



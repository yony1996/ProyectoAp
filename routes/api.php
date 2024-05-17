<?php

use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\SpecialtyController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/specialties', [SpecialtyController::class, 'index']);
Route::get('/specialties/{specialty}/doctors', [SpecialtyController::class, 'doctors']);
Route::get('/schedule/hours', [ScheduleController::class, 'hours']);

Route::middleware('auth:api')->group(function () {
	Route::get('/user', [UserController::class, 'show']);
	Route::post('/logout', [AuthController::class, 'logout']);
	//appointments
	Route::get('/appointments', [AppointmentController::class, 'index']);
	Route::post('/appointments', [AppointmentController::class, 'store']);
	//Exams
	Route::get('/exams', [ExamController::class, 'index']);
});

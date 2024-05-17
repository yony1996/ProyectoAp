<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\SpecialtyController;
use App\Http\Controllers\AppoimentController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


    Route::group(['middleware' => ['role:admin']], function () {
        //doctor
        Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctor.create');
        Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'editar'])->name('doctor.edit');
        Route::post('/doctors', [DoctorController::class, 'store'])->name('doctor.store');
        Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctor.update');
        Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctor.destroy');
        //chart
        Route::get('/charts/appoiment/line', [ChartController::class, 'appoiments'])->name('chart.appoiment');
        Route::get('/charts/doctors/column', [ChartController::class, 'doctors'])->name('chart.doctors');
        Route::get('/charts/doctors/column/data', [ChartController::class, 'doctorsJson']);
        //especialidades
        Route::get('/specialties', [SpecialtyController::class . 'index'])->name('specialty');
        Route::get('/specialties/create',  [SpecialtyController::class . 'create'])->name('specialty.create');
        Route::get('/specialties/{specialty}/edit',  [SpecialtyController::class . 'edit'])->name('specialty.edit');
        Route::post('/specialties',  [SpecialtyController::class . 'store'])->name('specialty.store');
        Route::put('/specialties/{specialty}',  [SpecialtyController::class . 'update'])->name('specialty.update');
        Route::delete('/specialties/{specialty}',  [SpecialtyController::class . 'destroy'])->name('specialty.destroy');
    });

    Route::group(['middleware' => ['role:admin|medico']], function () {
        Route::get('/patients/create', [PatientController::class, 'create'])->name('patient.create');
        Route::get('/patients/{patient}/edit', [PatientController::class, 'editar'])->name('patient.edit');
        Route::post('/patients', [PatientController::class, 'store'])->name('patient.store');
        Route::put('/patients/{patient}', [PatientController::class, 'update'])->name('patient.update');
        Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patient.destroy');
    });

    Route::group(['middleware' => ['role:medico']], function () {
        //Exams
        //(doctor)
        Route::get('/exams', [ExamController::class, 'index'])->name('exam');
        Route::get('/exams/{exam}/create', [ExamController::class, 'create'])->name('exam.create');
        Route::post('/exams', [ExamController::class, 'store'])->name('exam.store');
        Route::get('/exams/{print}/print', [ExamController::class, 'print'])->name('exam.print');
        Route::get('/exams/{print}/preview', [ExamController::class, 'preview'])->name('exam.preview');
        //Record
        //(doctor)
        Route::get('/records', [RecordController::class, 'index'])->name('record');
        Route::get('/records/{record}/create', [RecordController::class, 'create'])->name('record.create');
        Route::get('/records/{record}/edit', [RecordController::class, 'edit'])->name('record.edit');
        Route::post('/records', [RecordController::class, 'store'])->name('record.store');
        Route::get('/records/{print}/print', [RecordController::class, 'print'])->name('record.print');
        Route::get('/records/{record}/preview', [RecordController::class, 'preview'])->name('record.preview');
    });

    //Schedule
    //(paciente)
    Route::get('/schedule', [ScheduleController::class, 'edit'])->name('schedule');
    Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule.store');

    //Appoiments
    Route::get('/appoiments/create', [AppoimentController::class, 'create'])->name('appoiment.create');
    Route::post('/appoiments', [AppoimentController::class, 'store'])->name('appoiment.store');

    Route::get('/appoiments', [AppoimentController::class, 'index'])->name('appoiment');
    Route::get('/appoiments/{appoiment}', [AppoimentController::class, 'show'])->name('appoiment.show');

    Route::post('/appoiments/{appoiment}/cancel', [AppoimentController::class, 'PostCancel'])->name('appoiment.postcancel');
    Route::get('/appoiments/{appoiment}/cancel', [AppoimentController::class, 'ShowCancelForm'])->name('appoiment.cancelform');
    Route::post('/appoiments/{appoiment}/confirm', [AppoimentController::class, 'PostConfirm'])->name('appoiment.postconfirm');
    Route::post('/appoiments/{appoiment}/attended', [AppoimentController::class, 'Attended'])->name('appoiment.attended');
});

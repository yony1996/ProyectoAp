<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');

    //Doctores
    Route::get('/doctors/create', 'DoctorController@create')->name('doctor.create');
    Route::get('/doctors/{doctor}/edit', 'DoctorController@editar')->name('doctor.edit');
    Route::post('/doctors', 'DoctorController@store')->name('doctor.store');
    Route::put('/doctors/{doctor}', 'DoctorController@update')->name('doctor.update');
    Route::delete('/doctors/{doctor}', 'DoctorController@destroy')->name('doctor.destroy');
    //Pacientes
    Route::get('/patients/create', 'PatientController@create')->name('patient.create');
    Route::get('/patients/{patient}/edit', 'PatientController@editar')->name('patient.edit');
    Route::post('/patients', 'PatientController@store')->name('patient.store');
    Route::put('/patients/{patient}', 'PatientController@update')->name('patient.update');
    Route::delete('/patients/{patient}', 'PatientController@destroy')->name('patient.destroy');

    //Especialidades
    Route::get('/specialties', 'SpecialtyController@index')->name('specialty');
    Route::get('/specialties/create', 'SpecialtyController@create')->name('specialty.create');
    Route::get('/specialties/{specialty}/edit', 'SpecialtyController@edit')->name('specialty.edit');
    Route::post('/specialties', 'SpecialtyController@store')->name('specialty.store');
    Route::put('/specialties/{specialty}', 'SpecialtyController@update')->name('specialty.update');
    Route::delete('/specialties/{specialty}', 'SpecialtyController@destroy')->name('specialty.destroy');

    //Schedule
    Route::get('/schedule', 'ScheduleController@edit')->name('schedule');
    Route::post('/schedule', 'ScheduleController@store')->name('schedule.store');

    //Appoiments
    Route::get('/appoiments/create', 'AppoimentController@create')->name('appoiment.create');
    Route::post('/appoiments', 'AppoimentController@store')->name('appoiment.store');
    Route::get('/appoiments', 'AppoimentController@index')->name('appoiment');
    Route::get('/appoiments/{appoiment}', 'AppoimentController@show')->name('appoiment.show');
    Route::post('/appoiments/{appoiment}/cancel', 'AppoimentController@PostCancel')->name('appoiment.postcancel');
    Route::get('/appoiments/{appoiment}/cancel', 'AppoimentController@ShowCancelForm')->name('appoiment.cancelform');
    Route::post('/appoiments/{appoiment}/confirm', 'AppoimentController@PostConfirm')->name('appoiment.postconfirm');

    //Exams
    Route::get('/exams/create', 'ExamController@create')->name('exam.create');
    Route::post('/exams', 'ExamController@store')->name('exam.store');

    //JSON
    Route::get('/specialties/{specialty}/doctors', 'Api\SpecialtyController@doctors');
    Route::get('/schedule/hours', 'Api\ScheduleController@hours');
});

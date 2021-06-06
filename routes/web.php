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
    Route::get('/exams', 'ExamController@index')->name('exam');
    Route::get('/exams/{exam}/create', 'ExamController@create')->name('exam.create');
    Route::post('/exams', 'ExamController@store')->name('exam.store');
    Route::get('/exams/{print}/print', 'ExamController@print')->name('exam.print');
    Route::get('/exams/{print}/preview', 'ExamController@preview')->name('exam.preview');
    //Record
    Route::get('/records', 'RecordController@index')->name('record');
    Route::get('/records/{record}/create', 'RecordController@create')->name('record.create');
    Route::get('/records/{record}/edit', 'RecordController@edit')->name('record.edit');
    Route::post('/records', 'RecordController@store')->name('record.store');
    Route::get('/records/{print}/print', 'RecordController@print')->name('record.print');
    Route::get('/records/{record}/preview', 'RecordController@preview')->name('record.preview');

    //charts
    Route::get('/charts/appoiment/line','ChartController@appoiments')->name('chart.appoiment');
    Route::get('/charts/doctors/column','ChartController@doctors')->name('chart.doctors');
    Route::get('/charts/doctors/column/data','ChartController@doctorsJson');

    //JSON
    Route::get('/specialties/{specialty}/doctors', 'Api\SpecialtyController@doctors');
    Route::get('/schedule/hours', 'Api\ScheduleController@hours');
});

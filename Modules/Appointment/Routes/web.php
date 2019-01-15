<?php

// Controllers
use Modules\Appointment\Http\Controllers\AppointmentController;

// Packages
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

Route::prefix('appointment')->group(function() {
    Route::get('/',[AppointmentController::class,'index'])->name('appointment.index');
    Route::get('book-appointment',[AppointmentController::class,'bookAppointment'])->name('appointment.book-appointment');
    Route::get('doctor-visit',[AppointmentController::class,'doctorVisit'])->name('appointment.doctor-visit');
});

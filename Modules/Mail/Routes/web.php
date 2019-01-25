<?php

// Controllers
use Modules\Mail\Http\Controllers\MailController;

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

Route::prefix('mail')->group(function() {
    Route::get('/',      [MailController::class,'index'])->name('mail.index');
    Route::get('compose',[MailController::class,'compose'])->name('mail.compose');
});

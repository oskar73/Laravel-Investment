<?php
use Modules\FileManager\Http\Controllers\FileManagerController;
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

Route::prefix('filemanager')->group(function() {
    Route::get('/',[FilemanagerController::class,'index'])->name('file-manager.index');
    Route::get('images',[FilemanagerController::class,'images'])->name('file-manager.images');
    Route::get('videos',[FilemanagerController::class,'videos'])->name('file-manager.videos');
    Route::get('documents',[FilemanagerController::class,'documents'])->name('file-manager.documents');
    Route::get('all-files',[FilemanagerController::class,'allFiles'])->name('file-manager.all-files');
    Route::get('trash',[FilemanagerController::class,'trash'])->name('file-manager.trash');
});

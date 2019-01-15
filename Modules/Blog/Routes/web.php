<?php

// Controllers
use Modules\Blog\Http\Controllers\BlogController;

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

Route::prefix('blog')->group(function() {
    Route::get('/',[BlogController::class,'index'])->name('blog.index');
    Route::get('blog-main',[BlogController::class,'main'])->name('blog.main');
    Route::get('blog-category',[BlogController::class,'category'])->name('blog.category');
    Route::get('blog-details',[BlogController::class,'details'])->name('blog.details');
    Route::get('blog-grid',[BlogController::class,'grid'])->name('blog.grid');
    Route::get('blog-list',[BlogController::class,'list'])->name('blog.list');
    Route::get('blog-trending',[BlogController::class,'trending'])->name('blog.trending');
    Route::get('blog-comments',[BlogController::class,'comments'])->name('blog.comments');
});

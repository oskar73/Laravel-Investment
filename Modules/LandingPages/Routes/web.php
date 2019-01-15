<?php
use Modules\LandingPages\Http\Controllers\LandingPagesController;
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

Route::prefix('landing-pages')->name('landing-pages.')->group(function() {
    Route::get('/',[LandingPagesController::class, 'index'])->name('index');
    Route::get('blog',[LandingPagesController::class, 'blog'])->name('blog');
    Route::get('blog-detail',[LandingPagesController::class, 'blog_detail'])->name('blog-detail');
    Route::get('about',[LandingPagesController::class, 'about'])->name('about');
    Route::get('contact',[LandingPagesController::class, 'contact'])->name('contact');
    Route::get('ecommerce',[LandingPagesController::class, 'ecommerce'])->name('ecommerce');
    Route::get('faq',[LandingPagesController::class, 'faq'])->name('faq');
    Route::get('feature',[LandingPagesController::class, 'feature'])->name('feature');
    Route::get('pricing',[LandingPagesController::class, 'pricing'])->name('pricing');
    Route::get('saas',[LandingPagesController::class, 'saas'])->name('saas');
    Route::get('shop',[LandingPagesController::class, 'shop'])->name('shop');
    Route::get('shop-detail',[LandingPagesController::class, 'shop_detail'])->name('shop-detail');
    Route::get('software',[LandingPagesController::class, 'software'])->name('software');
    Route::get('startup',[LandingPagesController::class, 'startup'])->name('startup');
});

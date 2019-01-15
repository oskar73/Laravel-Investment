<?php
use Modules\ECommerce\Http\Controllers\ECommerceController;

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

Route::prefix('ecommerce')->group(function() {
    Route::get('/',[EcommerceController::class,'index'])->name('e-commerce.index');
    Route::get('/vendor-dashboard',[EcommerceController::class,'vendorDashboard'])->name('e-commerce.vendor-dashboard');
    Route::get('/shop-main',[EcommerceController::class,'shopMain'])->name('e-commerce.shop-main');
    Route::get('/order-process',[EcommerceController::class,'orderProcess'])->name('e-commerce.order-process');
    Route::get('/user-profile',[EcommerceController::class,'userProfile'])->name('e-commerce.user-profile');
    Route::get('/user-list',[EcommerceController::class,'userList'])->name('e-commerce.user-list');
    Route::get('/billing',[EcommerceController::class,'billing'])->name('e-commerce.billing');
    Route::get('/products',[EcommerceController::class,'products'])->name('e-commerce.products');
    Route::get('/shop-left-filter',[EcommerceController::class,'shopLeftFilter'])->name('e-commerce.shop-left-filter');
    Route::get('/shop-right-filter',[EcommerceController::class,'shopRightFilter'])->name('e-commerce.shop-right-filter');
    Route::get('/left-sidebar',[EcommerceController::class,'leftSidebar'])->name('e-commerce.left-sidebar');
    Route::get('/product-detail',[EcommerceController::class,'productDetail'])->name('e-commerce.product-detail');
    Route::get('/product-detail-360',[EcommerceController::class,'productDetail360'])->name('e-commerce.product-detail-360');
    Route::get('/product-detail-3d',[EcommerceController::class,'productDetail3d'])->name('e-commerce.product-detail-3d');
    Route::get('/categories-list',[EcommerceController::class,'categoriesList'])->name('e-commerce.categories-list');
    Route::get('/wishlist',[EcommerceController::class,'wishlist'])->name('e-commerce.wishlist');
});

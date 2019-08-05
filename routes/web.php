<?php

// Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Security\RolePermission;
use App\Http\Controllers\Security\RoleController;
use App\Http\Controllers\Security\PermissionController;
use App\Http\Controllers\UserController;

// Packages
use Illuminate\Support\Facades\Artisan;
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

require __DIR__.'/auth.php';

Route::get('/storage', function () {
    Artisan::call('storage:link');
});

//UI Pages Routs
Route::get('/', [HomeController::class, 'uisheet'])->name('uisheet');

Route::group(['middleware' => ['auth','verified']], function () {
    // Permission Module
    Route::get('/permission-role',[RolePermission::class, 'index'])->name('permission-role.list')->middleware('password.confirm');
    Route::post('/permission-role/store',[RolePermission::class, 'store'])->name('permission-role.store');
    Route::resource('permission',PermissionController::class);
    Route::resource('role', RoleController::class);

    // Dashboard Routes
    Route::get('/dashboards', [HomeController::class, 'index'])->name('dashboards');
    //Alternative routes
    Route::get('/alternate-dashboard', [HomeController::class, 'index1'])->name('dashboard.alternate');
    // Users Module
    Route::resource('users', UserController::class);
});

//App Details Page => 'Dashboard'], function() {
Route::group(['prefix' => 'menu-style'], function() {
    //MenuStyle Page Routs
    Route::get('horizontal', [HomeController::class, 'horizontal'])->name('menu-style.horizontal');
    Route::get('dual-horizontal', [HomeController::class, 'dualHorizontal'])->name('menu-style.dual-horizontal');
    Route::get('dual-compact', [HomeController::class, 'dualCompact'])->name('menu-style.dual-compact');
    Route::get('boxed', [HomeController::class, 'boxed'])->name('menu-style.boxed');
    Route::get('boxed-fancy', [HomeController::class, 'boxedFancy'])->name('menu-style.boxed-fancy');
    Route::get('boxed-fixed', [HomeController::class, 'boxedFixed'])->name('menu-style.boxed-fixed');
});

//App Details Page => 'special-pages'], function() {
Route::group(['prefix' => 'special-pages'], function() {
    //Example Page Routs
    Route::get('billing', [HomeController::class, 'billing'])->name('special-pages.billing');
    Route::get('calender', [HomeController::class, 'calender'])->name('special-pages.calender');
    Route::get('kanban', [HomeController::class, 'kanban'])->name('special-pages.kanban');
    Route::get('pricing', [HomeController::class, 'pricing'])->name('special-pages.pricing');
    Route::get('rtl-support', [HomeController::class, 'rtlsupport'])->name('special-pages.rtlsupport');
    Route::get('timeline', [HomeController::class, 'timeline'])->name('special-pages.timeline');
});



//Widget Routs
Route::group(['prefix' => 'widget'], function() {
    Route::get('widget-basic', [HomeController::class, 'widgetBasic'])->name('widget.widget-basic');
    Route::get('widget-chart', [HomeController::class, 'widgetChart'])->name('widget.widget-chart');
    Route::get('widget-card', [HomeController::class, 'widgetCard'])->name('widget.widget-card');
});

//Maps Routs
Route::group(['prefix' => 'maps'], function() {
    Route::get('google', [HomeController::class, 'google'])->name('maps.google');
    Route::get('vector', [HomeController::class, 'vector'])->name('maps.vector');
});
//plugins routes
Route::group(['prefix' => 'plugins'], function() {
    Route::get('apexcharts', [HomeController::class, 'apexcharts'])->name('plugins.apexcharts');
    Route::get('button-hover', [HomeController::class, 'buttonHover'])->name('plugins.button-hover');
    Route::get('choise-js', [HomeController::class, 'choiseJs'])->name('plugins.choise-js');
    Route::get('flatpickr', [HomeController::class, 'flatpickr'])->name('plugins.flatpickr');
    Route::get('fslightbox', [HomeController::class, 'fslightbox'])->name('plugins.fslightbox');
    Route::get('gallery-hover', [HomeController::class, 'galleryHover'])->name('plugins.gallery-hover');
    Route::get('image-croper', [HomeController::class, 'imageCroper'])->name('plugins.image-croper');
    Route::get('loader', [HomeController::class, 'loader'])->name('plugins.loader');
    Route::get('quill-editor', [HomeController::class, 'quillEditor'])->name('plugins.quill-editor');
    Route::get('rating', [HomeController::class, 'rating'])->name('plugins.rating');
    Route::get('select2', [HomeController::class, 'select2'])->name('plugins.select2');
    Route::get('sweet-alert', [HomeController::class, 'sweetAlert'])->name('plugins.sweet-alert');
    Route::get('ui-color', [HomeController::class, 'uiColor'])->name('plugins.ui-color');
    Route::get('uppy', [HomeController::class, 'uppy'])->name('plugins.uppy');
    Route::get('tree-view', [HomeController::class, 'treeView'])->name('plugins.tree-view');
});

//Auth pages Routs
Route::get('signin', [HomeController::class, 'signin'])->name('auth.login');
Route::get('signup', [HomeController::class, 'signup'])->name('auth.register');
Route::get('confirm-mail', [HomeController::class, 'confirmmail'])->name('auth.confirm-mail');
Route::get('forgot-password', [HomeController::class, 'resetPassword'])->name('auth.forgot-password');
Route::get('lock-screen', [HomeController::class, 'lockscreen'])->name('auth.lock-screen');

Route::group(['prefix' => 'auth', 'middleware' => 'auth'], function() {
    Route::get('user-privacy-setting', [HomeController::class, 'userPrivacySetting'])->name('auth.user-privacy-setting');
    Route::group(['prefix' => 'pro'], function() {
        Route::group(['prefix' => 'animated'], function() {
            Route::get('signin', [HomeController::class, 'animatedSignin'])->name('animated.signin');
            Route::get('signup', [HomeController::class, 'animatedSignup'])->name('animated.signup');
            Route::get('email', [HomeController::class, 'animatedEmail'])->name('animated.email');
            Route::get('lock-screen', [HomeController::class, 'animatedLockScreen'])->name('animated.lock-screen');
            Route::get('reset-password', [HomeController::class, 'animatedResetPassword'])->name('animated.reset-password');
            Route::get('two-factor', [HomeController::class, 'animatedTwoFactor'])->name('animated.two-factor');
            Route::get('account-deactivate', [HomeController::class, 'animatedAccountDeactivate'])->name('animated.account-deactivate');
        });
        Route::group(['prefix' => 'simple'], function() {
            Route::get('signin', [HomeController::class, 'simpleSignin'])->name('simple.signin');
            Route::get('signup', [HomeController::class, 'simpleSignup'])->name('simple.signup');
        });
    });
});

//Error Page Route
Route::group(['prefix' => 'errors'], function() {
    Route::get('error404', [HomeController::class, 'error404'])->name('errors.error404');
    Route::get('error500', [HomeController::class, 'error500'])->name('errors.error500');
    Route::get('maintenance', [HomeController::class, 'maintenance'])->name('errors.maintenance');
});


//Forms Pages Routs
Route::group(['prefix' => 'forms'], function() {
    Route::get('element', [HomeController::class, 'element'])->name('forms.element');
    Route::get('wizard', [HomeController::class, 'wizard'])->name('forms.wizard');
    Route::get('validation', [HomeController::class, 'validation'])->name('forms.validation');
});


//Table Page Routs
Route::group(['prefix' => 'table'], function() {
    Route::get('bootstraptable', [HomeController::class, 'bootstrapTable'])->name('table.bootstrap-table');
    Route::get('datatable', [HomeController::class, 'dataTable'])->name('table.data-table');
    Route::get('bordertable',[HomeController::class, 'borderTable'])->name('table.border-table');
    Route::get('fancytable',[HomeController::class, 'fancyTable'])->name('table.fancy-table');
    Route::get('fixedtable',[HomeController::class, 'fixedTable'])->name('table.fixed-table');
});

//Icons Page Routs
Route::group(['prefix' => 'icons'], function() {
    Route::get('solid', [HomeController::class, 'solid'])->name('icons.solid');
    Route::get('outline', [HomeController::class, 'outline'])->name('icons.outline');
    Route::get('dualtone', [HomeController::class, 'dualtone'])->name('icons.dualtone');
    Route::get('colored', [HomeController::class, 'colored'])->name('icons.colored');
});
//Extra Page Routs
Route::get('blank-page',[HomeController::class, 'blankPage'])->name('pages.blank-page');
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('pages.privacy-policy');
Route::get('terms-of-use', [HomeController::class, 'termsOfUse'])->name('pages.term-of-use');



                              
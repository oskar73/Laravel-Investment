<?php
// Controllers
use Modules\Social\Http\Controllers\SocialController;

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

Route::prefix('social')->group(function() {
    Route::get('/',[SocialController::class,'index'])->name('social.index');
    Route::get('newsfeed',[SocialController::class,'newsfeed'])->name('social.newsfeed');
    Route::get('friend-list',[SocialController::class,'friendList'])->name('social.friendlist');
    Route::get('friend-request',[SocialController::class,'friendRequest'])->name('social.friendrequest');
    Route::get('friend-profile',[SocialController::class,'friendProfile'])->name('social.friendprofile');
    Route::get('profile-badges',[SocialController::class,'profileBadges'])->name('social.profilebadges');
    Route::get('profile-images',[SocialController::class,'profileImages'])->name('social.profileimages');
    Route::get('profile-video',[SocialController::class,'profileVideo'])->name('social.profilevideo');
    Route::get('birthday',[SocialController::class,'birthday'])->name('social.birthday');
    Route::get('notification',[SocialController::class,'notification'])->name('social.notification');
    Route::get('account-setting',[SocialController::class,'accountSetting'])->name('social.accountsetting');
    Route::get('profile-event',[SocialController::class,'profileEvent'])->name('social.profileevent');
    Route::get('event-detail',[SocialController::class,'eventDetail'])->name('social.eventdetail');
    Route::get('group',[SocialController::class,'group'])->name('social.group');
    Route::get('group-detail',[SocialController::class,'groupDetail'])->name('social.groupdetail');
    Route::get('social-profile',[SocialController::class,'socialProfile'])->name('social.social_profile');

});

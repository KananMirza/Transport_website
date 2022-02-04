<?php

use App\Http\Controllers\AuthController\LoginController;
use App\Http\Controllers\General\General;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\General as Profile;
use App\Http\Controllers\Campaign\General as Campaign;
use App\Http\Controllers\Services\General as Services;
use App\Http\Controllers\Settings\General as Settings;
use App\Http\Controllers\Blog\General as Blog;
use App\Http\Controllers\Contact\General as Contact;

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

Route::middleware('isLogout')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login_post'])->name('login_post');
});


Route::middleware('isLogin')->group(function () {
    Route::get('/', [General::class, "index"])->name('index');
    Route::get('/logout', [LoginController::class, "logout"])->name('logout');

    //for profile
    Route::get('/profile', [Profile::class, "profileIndex"])->name('profileIndex');
    Route::post('/profile', [Profile::class, "profileUpdate"])->name('profileUpdate');

    // for campaign
    Route::get('/campaign/add', [Campaign::class, "campaignIndex"])->name('campaignIndex');
    Route::post('/campaign/add', [Campaign::class, "campaignAdd"])->name('campaignAdd');
    Route::get('/campaign/view/all', [Campaign::class, "allcampaign"])->name('allcampaign');
    Route::post('/campaign/view/all', [Campaign::class, "viewcampaign"])->name('viewcampaign');
    Route::post('/campaign/update', [Campaign::class, "updatecampaign"])->name('updatecampaign');
    Route::post('/campaign/delete', [Campaign::class, "deletecampaign"])->name('deletecampaign');

    //for services
    Route::get('/services/service', [Services::class, "serviceIndex"])->name('serviceIndex');
    Route::post('/services/service', [Services::class, "addService"])->name('addService');
    Route::post('/services/service/change/status', [Services::class, "changeStatus"]);
    Route::post('/services/service/view', [Services::class, "viewService"]);
    Route::post('/services/service/update', [Services::class, "updateService"])->name('updateService');
    Route::post('/services/service/delete', [Services::class, "deleteService"]);

    //for cargo
    Route::get('/services/cargo', [Services::class, "cargoIndex"])->name('cargoIndex');
    Route::post('/services/cargo', [Services::class, "addCargo"])->name('addCargo');
    Route::post('/services/cargo/status', [Services::class, "statusIndex"])->name('statusIndex');
    Route::post('/services/cargo/view', [Services::class, "viewCargo"])->name('viewCargo');
    Route::post('/services/cargo/update', [Services::class, "updateCargo"])->name('updateCargo');
    Route::post('/services/cargo/delete', [Services::class, "deleteCargo"])->name('deleteCargo');

    //for settings
    Route::get('/settings/slider', [Settings::class, "sliderIndex"])->name('sliderIndex');
    Route::post('/settings/slider', [Settings::class, "addSlider"])->name('addSlider');
    Route::post('/settings/slider/view', [Settings::class, "viewSlider"])->name('viewSlider');
    Route::post('/settings/slider/update', [Settings::class, "updateSlider"])->name('updateSlider');
    Route::post('/settings/slider/delete', [Settings::class, "deleteSlider"])->name('deleteSlider');

    Route::get('/settings/contact', [Settings::class, "contactIndex"])->name('contactIndex');
    Route::post('/settings/contact', [Settings::class, "updateIndex"])->name('updateIndex');

    Route::get('/settings/about', [Settings::class, "aboutIndex"])->name('aboutIndex');
    Route::post('/settings/about', [Settings::class, "updateAbout"])->name('updateAbout');

    Route::get('/settings/logo', [Settings::class, "logoIndex"])->name('logoIndex');
    Route::post('/settings/logo', [Settings::class, "logoUpdate"])->name('logoUpdate');
    Route::post('/settings/favicon', [Settings::class, "faviconUpdate"])->name('faviconUpdate');

    Route::get('/settings/social', [Settings::class, "socialIndex"])->name('socialIndex');
    Route::post('/settings/social', [Settings::class, "socialUpdate"])->name('socialUpdate');

    //for blog
    Route::get('/blog/add', [Blog::class, "blogIndex"])->name('blogIndex');
    Route::post('/blog/add', [Blog::class, "blogAdd"])->name('blogAdd');

    Route::get('/blog/all', [Blog::class, "allBlog"])->name('allBlog');
    Route::post('/blog/all', [Blog::class, "blogStatus"])->name('blogStatus');
    Route::post('/blog/delete', [Blog::class, "blogDelete"])->name('blogDelete');

    Route::get('/blog/edit/{id}', [Blog::class, "editBlog"])->name('editBlog');
    Route::post('/blog/update', [Blog::class, "updateBlog"])->name('updateBlog');

    //for Messages
    Route::get('/messages/all', [Contact::class, "messageIndex"])->name('messageIndex');
    Route::post('/messages/all', [Contact::class, "viewMessage"])->name('viewMessage');

    Route::get('/subscribe/all', [Contact::class, "subscribeIndex"])->name('subscribeIndex');
});

<?php

use App\Http\Controllers\General\General;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About\General as About;
use App\Http\Controllers\Contact\General as Contact;
use App\Http\Controllers\Services\General as Services;
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

Route::get('/', [General::class, "index"])->name('index');
Route::post('/sifaris', [General::class, "order"])->name('order');

//for about
Route::get('/haqqimizda', [About::class, "aboutIndex"])->name('aboutIndex');

//for contact
Route::get('/elaqe', [Contact::class, "contactIndex"])->name('contactIndex');

//for services
Route::get('/xidmetlerimiz', [Services::class, "servicesIndex"])->name('servicesIndex');
Route::get('/xidmetlerimiz/{slug}', [Services::class, "serviceDetails"])->name('serviceDetails');

Route::get('/dasidigimiz-yukler', [Services::class, "cargoIndex"])->name('cargoIndex');
Route::get('/kampaniyalar/{slug}', [Services::class, "campaignIndex"])->name('campaignIndex');



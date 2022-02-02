<?php

use App\Http\Controllers\General\General;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About\General as About;
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

Route::get('/', [General::class, "index"])->name('index');
Route::post('/sifaris', [General::class, "order"])->name('order');

Route::get('/haqqimizda', [About::class, "aboutIndex"])->name('aboutIndex');

Route::get('/elaqe', [Contact::class, "contactIndex"])->name('contactIndex');



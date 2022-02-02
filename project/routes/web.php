<?php

use App\Http\Controllers\General\General;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About\General as About;
use App\Http\Controllers\Contact\General as Contact;
use App\Http\Controllers\Services\General as Services;
use App\Http\Controllers\Blog\General as Blog;
use App\Http\Controllers\Sitemap\General as Sitemap;
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
Route::get('/axtaris', [General::class, "search"])->name('search');

//for about
Route::get('/haqqimizda', [About::class, "aboutIndex"])->name('aboutIndex');

//for contact
Route::get('/elaqe', [Contact::class, "contactIndex"])->name('contactIndex');

//for services
Route::get('/xidmetlerimiz', [Services::class, "servicesIndex"])->name('servicesIndex');
Route::get('/xidmetlerimiz/{slug}', [Services::class, "serviceDetails"])->name('serviceDetails');

Route::get('/dasidigimiz-yukler', [Services::class, "cargoIndex"])->name('cargoIndex');
Route::get('/kampaniyalar/{slug}', [Services::class, "campaignIndex"])->name('campaignIndex');

//for blog
Route::get('/blog', [Blog::class, "blogIndex"])->name('blogIndex');
Route::get('/blog/{slug}', [Blog::class, "blogDetails"])->name('blogDetails');
Route::post('/blog', [Blog::class, "subscribe"])->name('subscribe');

//for sitemap
Route::get('/sitemap.xml',[Sitemap::class,'index'])->name('sitemapIndex');
Route::get('/sitemap/services.xml',[Sitemap::class,'services'])->name('sitemapAuthor');
Route::get('/sitemap/campaign.xml',[Sitemap::class,'campaign'])->name('sitemapCategory');
Route::get('/sitemap/cargo.xml',[Sitemap::class,'cargo'])->name('sitemapCategory');
Route::get('/sitemap/blog.xml',[Sitemap::class,'blog'])->name('sitemapNews');

Route::fallback(function (){
    return redirect()->route('index');
});

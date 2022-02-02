<?php

namespace App\Http\Controllers\Sitemap;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\campaign;
use App\Models\cargo;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class General extends Controller
{
    public function index()
    {
        return response()->view('sitemap.sitemap')->header('Content-Type', 'text/xml');
    }
    public function services()
    {
        $data = services::where('status','1')->get();
        View::share('datas', $data);
        return response()->view('sitemap.services')->header('Content-Type', 'text/xml');
    }
    public function campaign()
    {
        $data = campaign::where('status','1')->get();
        View::share('datas', $data);
        return response()->view('sitemap.campaign')->header('Content-Type', 'text/xml');
    }
    public function cargo()
    {
        return response()->view('sitemap.cargo')->header('Content-Type', 'text/xml');
    }
    public function blog()
    {
        $data = blog::where('status','1')->get();
        View::share('datas', $data);
        return response()->view('sitemap.blog')->header('Content-Type', 'text/xml');
    }
}

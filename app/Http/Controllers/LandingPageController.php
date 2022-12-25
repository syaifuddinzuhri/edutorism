<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        Artisan::call("cache:clear");
        Artisan::call("route:cache");
        Artisan::call("route:clear");
        Artisan::call("config:cache");
        return view('landing-page.home');
    }

    public function detailLayanan($slug)
    {
        return view('landing-page.detail-layanan');
    }
}

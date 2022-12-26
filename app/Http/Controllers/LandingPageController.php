<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

        $services = Service::limit(3)->get();
        return view('landing-page.home', compact('services'));
    }

    public function detailLayanan($id)
    {
        $data = Service::find($id);
        return view('landing-page.detail-layanan', compact('data'));
    }

    public function layanan()
    {
        $data = Service::get();
        return view('landing-page.layanan', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Flow;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Setting;
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
        $flow = Flow::orderBy('number')->get();
        $faq = Faq::get();
        $profile = Profile::first();
        $setting = Setting::first();
        return view('landing-page.home', compact('services', 'flow', 'faq', 'profile', 'setting'));
    }

    public function detailLayanan($id)
    {
        $setting = Setting::first();
        $profile = Profile::first();
        $data = Service::find($id);
        return view('landing-page.detail-layanan', compact('data', 'setting', 'profile'));
    }

    public function layanan()
    {
        $setting = Setting::first();
        $profile = Profile::first();
        $data = Service::get();
        return view('landing-page.layanan', compact('data', 'setting', 'profile'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(Request $request)
    {
        return view('landing-page.home');
    }

    public function detailLayanan($slug)
    {
        return view('landing-page.detail-layanan');
    }
}
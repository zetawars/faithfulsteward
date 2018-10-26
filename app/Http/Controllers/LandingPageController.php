<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function Index()
    {
        return view('Panel.LandingPage.LandingPage');
    }
}

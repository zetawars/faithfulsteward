<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CompaginController extends Controller
{
    public function Index()
    {
        return view('Panel.Compagin.Compagin');
    }
    public function CompaginAdd()
    {
        return View('Panel.Compagin.NewCompagin');
    }
}

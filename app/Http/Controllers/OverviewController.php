<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverviewController extends Controller
{
    public function Dashboard()
    {
        return view('Panel.Overview.Dashboard');

    }
}

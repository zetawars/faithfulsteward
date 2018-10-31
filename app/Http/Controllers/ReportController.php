<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function Index()
    {
        return view('Panel.Report.Index');
    }
    public function View()
    {

         return view('Panel.Report.List');
    }


    public function CustomReport()
    {
        return view('Panel.Report.CustomReport');
    }
}

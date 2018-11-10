<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
   public function Index()
   {
       return view('Instructor.Reports.Index');
   }

   public function CustomReport()
   {
       return view('Instructor.Reports.CustomReport');
   }
}

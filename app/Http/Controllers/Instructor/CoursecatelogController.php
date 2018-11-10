<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursecatelogController extends Controller
{
    public function Index()
    {
        return view('Instructor.CourseCatelog.Index');
    }
}

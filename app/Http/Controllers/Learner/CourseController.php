<?php

namespace App\Http\Controllers\Learner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function Index()
    {
        return view('Learner.Index');
    }
    public function Courses()
    {
        return view ('Learner.Courses.Index');
    }
    public function Bibilical()
    {
        return view('Learner.Biblicalfinance');
    }

    public function Biography()
    {
        return view('Learner.Biography');
    }

    public function CourseCatelog()
    {
        return view('Learner.CourseCatelog.Index');
    }
}


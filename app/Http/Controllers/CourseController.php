<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function General()
    {
        return view('Panel.Courses.General');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function General()
    {
        return view('Panel.Courses.Courses');
    }

    public function viewCourse()
    {
        return view('Panel.Courses.ViewCourse');
    }
    public function ManageCourse()
    {
        return view('Panel.Courses.ManageCourse');
    }
}

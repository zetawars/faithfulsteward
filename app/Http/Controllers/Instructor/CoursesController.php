<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function Index()
    {
        return view('Instructor.Courses.Index');
    }
}

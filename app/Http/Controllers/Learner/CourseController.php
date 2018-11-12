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

}

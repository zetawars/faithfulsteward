<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnerController extends Controller
{
    public function EnrollLearner()
    {
        return view('Panel.Learner.EnrollLearner');
    }
}

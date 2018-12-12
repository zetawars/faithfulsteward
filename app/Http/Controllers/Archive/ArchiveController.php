<?php

namespace App\Http\Controllers\Archive;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArchiveController extends Controller
{
    public function Quiz()
    {
        return view('Archive.Quiz');
    }

    public function Lesson()
    {
        return view('Archive.ModulePageLesson1');
    }
}

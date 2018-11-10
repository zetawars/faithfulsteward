<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    Public function Index()
    {
        return view('Panel.Project.Project');
    }


    Public function ProjectAdd()
    {
        return view('Panel.Project.NewProject');
    }

    Public function ProjectView()
    {
        return view('Panel.Project.view');
    }

}
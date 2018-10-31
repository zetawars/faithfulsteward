<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return view('Panel.Users.Index');
    }


    public function UserAdd()
    {
        return view('Panel.Users.UserAdd');
    }

    public function UserProfile()
    {
        return view('Panel.Users.UserProfile');
    }
    

}

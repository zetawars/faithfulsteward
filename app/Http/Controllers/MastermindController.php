<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastermindController extends Controller
{
    public function Mastermind()
    {
        return view('Panel.Mastermind.Mastermind');
    }

    public function NewMastermind()
    {
        return view('Panel.Mastermind.NewMastermind');
    }
}

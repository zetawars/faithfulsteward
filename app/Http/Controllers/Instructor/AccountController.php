<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
  public function Index()
  {
      return view('Instructor.MyAccount.Index');
  }
}

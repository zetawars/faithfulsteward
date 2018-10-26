<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category()
    {
        return view('Panel.Category.Category');
    }

    public function CategoryAdd()
    {
        return view('Panel.Category.CategoryAdd');
    }
}

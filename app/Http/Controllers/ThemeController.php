<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function index()
    {
        return view('theme.index');
    }
    public function category()
    {
        return view('theme.categories');
    }
    public function contact()
    {
        return view('theme.contacts');
    }
    public function about()
    {
        return view('theme.about');
    }
    public function recipe()
    {
        return view('theme.recipe');
    }
}

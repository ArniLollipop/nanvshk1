<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        
        return view('about');
    }

    public function about2()
    {
        
        return view('about-2');
    }

    public function about3()
    {
        
        return view('about-3');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProjectsController extends Controller
{
    public function index()
    {
        
        return view('projects');
    }

    public function detail1()
    {
        
        return view('project-details1');
    }
    public function detail2()
    {
        
        return view('project-details2');
    }
    public function detail3()
    {
        
        return view('project-details3');
    }
    public function detail4()
    {
        
        return view('project-details4');
    }
    public function detail5()
    {
        
        return view('project-details5');
    }
    public function detail6()
    {
        
        return view('project-details6');
    }
    public function detail7()
    {
        
        return view('project-details7');
    }
    public function detail77()
    {
        $products = Product::paginate(12);
        return view('project-details77')->with([
            'products' => $products
        ]);
    }
    public function detail8()
    {
        
        return view('project-details8');
    }
}

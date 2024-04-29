<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class LandingPageController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at','DESC')->paginate(3);
        
        return view('landing-page')->with([
            'news' => $news
        ]);
    }
}

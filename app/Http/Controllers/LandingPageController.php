<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Anon;


class LandingPageController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at','DESC')->paginate(3);
        $anons = Anon::orderBy('created_at','DESC')->take(5)->get();;
        
        return view('landing-page')->with([
            'news' => $news,
            'anons' => $anons
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(3);
        return view('news')->with([
            'news' => $news
        ]);
    }

    public function detail()
    {
        if (request()->info) {
            $info = News::where('slug',request()->info)->first();            
        }

        $images = json_decode($info->images);
        
        $info_prev = News::inRandomOrder()->first();
        $info_next = News::inRandomOrder()->first();
        return view('news-details')->with([
            'info' => $info,
            'info_prev' => $info_prev,
            'info_next' => $info_next,
            'images' => $images

        ]);
    }
}

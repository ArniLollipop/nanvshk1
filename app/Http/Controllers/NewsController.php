<?php

namespace App\Http\Controllers;
use App\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(1);
        return view('news')->with([
            'news' => $news
        ]);
    }

    public function detail()
    {
        if (request()->info) {
            $info = News::where('slug',request()->info)->first();            
        }

        $info_prev = News::inRandomOrder()->where('id', '!=', $info->id)->first();
        $info_next = News::inRandomOrder()->where('id', '!=', $info->id)->where('id', '!=', $info_prev->id)->first();
        return view('news-details')->with([
            'info' => $info,
            'info_prev' => $info_prev,
            'info_next' => $info_next

        ]);
    }
}

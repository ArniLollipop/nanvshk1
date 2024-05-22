<?php

namespace App\Http\Controllers;
use App\News;
use App\Review;
use App\Anon;


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


        if($info == null){
            $info = Anon::where('slug',request()->info)->first();            
        }
        
      

        $images = (isset($images) ? json_decode($info->images) : null);
        
        if($info->id){
            $reviews = Review::where('news_id', $info->id)->get();
        }

        $info_prev = News::inRandomOrder()->first();
        $info_next = News::inRandomOrder()->first();
        return view('news-details')->with([
            'info' => $info,
            'info_prev' => $info_prev,
            'info_next' => $info_next,
            'images' => $images,
            'reviews' => $reviews,


        ]);
    }

    public function store(Request $request)
    {

        Review::create($request->all());
        return back()->with($request->news_id);
    }

    public function search(Request $request)
    {
        
        $request->validate([
            'query' => 'required|min:3',
            ]);

        $q = $request->input('query');

        $terms = explode(" ",$request->input('query'));
            foreach($terms as $term){
                $array[] =  '%' . mb_strtoupper($term) . '%';
            }

        $news = News::when(isset($q), function ($query) use ($q) {
                $query  ->where(\DB::raw('UPPER(title)'), 'LIKE', '%' . mb_strtoupper($q) . '%')
                ->orWhere(\DB::raw('UPPER(body)'), 'LIKE', '%' . mb_strtoupper($q) . '%');

        });
        $count = $news->count();
        $view = 'search-results';

      if($count == 0){
            $news = News::when(isset($q), function ($query) use ($array) {
              foreach($array as $term){
                  $query  ->where(\DB::raw('UPPER(title)'), 'LIKE', $term)
                  ->orWhere(\DB::raw('UPPER(body)'), 'LIKE', '%' . $term);
              }

          });
          $count = $news->count();
          $view = 'search-results';
      }

        $news = $news->paginate(6);

        return view($view)->with([
            'news' => $news
            ]);
    }
}

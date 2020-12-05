<?php

namespace App\Http\Controllers;
use App\Models\Post;


class NewsController extends Controller
{
    public function index()
    {
        $stock_img = config('visitech.news');
        $news = Post::where('publish', true)->orderBy('updated_at', 'desc')->paginate(6);
        // var_dump($news);
        return view('news', [
            "stock_img" => $stock_img,
            "news"=>$news
        ]);
    }
}

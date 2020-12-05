<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    //
    public function index($slug)
    {
        $stock_img = config('visitech.news');
        $news = Post::where('publish', true)->where('slug', $slug)->orderBy('updated_at', 'desc')->paginate(6);
        $recent_news=Post::where('publish',true)->where('slug', '!=' ,$slug)->orderBy('updated_at', 'desc')->paginate(3);
        return view('news-detail', [
            "stock_img" => $stock_img,
            "news"=>$news,
            "recent_news"=>$recent_news
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view("pages.news", compact("news")); // Loads "pages.news"
    }
        
    public function show(News $news) {
        dd($news->content);
      }
                 
}




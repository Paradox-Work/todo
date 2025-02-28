<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view("todos.index", compact("news")); // Loads "todos.index"
    }

    public function newsPage()
    {
        $news = News::all();
        return view("pages.news", compact("news")); // Loads "pages.news"
    }
}




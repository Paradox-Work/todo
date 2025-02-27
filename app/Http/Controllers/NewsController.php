<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $todos = News::all();
        return view("todos.index", compact("todos"));
    }
}


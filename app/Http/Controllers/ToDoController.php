<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use Illuminate\Http\Request;


class ToDoController extends Controller
{
    public function index()
    {
        $Todos = ToDo::all();
        return view("todos.toDo", compact("Todos")); // Loads "pages.news"
    }
        
    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
    }

      public function create(){
    return view('todos.create');
    }
    public function store(Request $request){
        ToDo::create([
            'content' => $request->content,
            'completed' => false
        ]);
    
        return redirect('/todos');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
}




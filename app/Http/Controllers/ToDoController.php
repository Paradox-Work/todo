<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use Illuminate\Http\Request;


class ToDoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $Todos = ToDo::all();
        return view("todos.toDo", compact("Todos"));
    }

    public function show(ToDo $todo)
    {
        return view("todos.show", compact("todo"));
    }

    public function create()
    {
        return view('diaries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "content" => ["required", "max:255"]
        ]);

        ToDo::create([
            "content" => $validated["content"],
            "completed" => false
        ]);

        return redirect("/todos");
    }

    public function edit(ToDo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, ToDo $todo)
{
    $validated = $request->validate([
        'content' => ['required', 'max:255'],
        'completed' => ['boolean'],
    ]);

    $todo->content = $validated['content'];
    $todo->completed = $validated['completed'];
    $todo->save();

    return redirect('/todos');
}
public function destroy(ToDo $todo){
    $todo->delete();
    return redirect('/todos');
}



}




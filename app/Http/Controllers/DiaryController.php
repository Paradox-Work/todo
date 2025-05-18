<?php


namespace App\Http\Controllers;
use App\Models\DiaryEntry;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Diaries = DiaryEntry::all();
        return view("diaries.index", compact("Diaries")); // Loads "pages.news"
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diaries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required'],
            'date' => ['required', 'date'],
        ]);

        // Create a new diary entry explicitly
        DiaryEntry::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'date' => $validated['date'],
        ]);

        // Redirect to a page — maybe back to all diary entries
        return redirect('/diaries');
    }

    /**
     * Display the specified resource.
     */
    public function show(DiaryEntry $diary) {
        return view("diaries.show", compact("diary"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiaryEntry $diary)
    {
        return view('diaries.edit', compact('diary'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DiaryEntry $diary)

    {
         // Validate input
         $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'body' => ['required'],
            'date' => ['required', 'date'],
        ]);

    
        $diary->title = $validated['title'];
        $diary->body = $validated['body'];
        $diary->date = $validated['date'];
        $diary->save();
    
        return redirect('/diaries');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiaryEntry $diary){
        $diary->delete();
        return redirect('/diaries');
    }
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
}

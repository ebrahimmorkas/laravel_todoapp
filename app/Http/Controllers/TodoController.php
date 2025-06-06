<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // ✅ CORRECT

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    // Show all the todos
    public function index() {
        if(Auth::check()) {
            $todos = Todo::all();
        }
        else {
            $todos = collect();
        } 
        return view('dashboard', compact('todos'));
    }

    // Display the page to create the todo
    public function create() {
        return view('todos.create');
    }

    // function to add the todo in database
    public function store(Request $request){
        $validatedResponse = $request->validate([
            'title' => ['required', 'max:255', 'string'],
            'description' => ['required', 'max:255', 'string']
        ]);

        $todo = Todo::create([
            'title' => $validatedResponse['title'],
            'description' => $validatedResponse['description'],
            'user_id' => Auth::id()
        ]);

        return redirect('/')->with('success', 'Todo created successfully');
    }

    // function to display the form for edit
    public function edit($id) {
        $todo = Todo::findOrFail($id);

        // Prevent editing the todo created by other person
        if($todo->user_id !== Auth::id()) {
            abort(403);
        }

        return view('todos.edit');
    }
}

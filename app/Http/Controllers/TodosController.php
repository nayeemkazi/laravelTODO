<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        //dd($todos);
        return view('todos', compact('todos'));
    }

    public function create()
    {
        // dd(request('todo'));
        $todo = new Todo;
        $todo->todo = request('todo');
        $todo->save();

        return redirect()->back();
    }

    public function destroy($todo)
    {
        $deletable = Todo::find($todo);
        $deletable->delete();

        return redirect()->back();
        // dd($deletable);
    }

    public function update($todo)
    {
        $todo = Todo::find($todo);
        return view('update', compact('todo'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        $todo->todo = request('todo');
        $todo->save();

        return redirect('/todos');
    }
    public function completed($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !($todo->completed);
        $todo->save();

        return redirect('/todos');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
    public function store(Request $request)
    {
        return Todo::create($request->all());
    }
    public function edit(Todo $todo)
    {
        return $todo;
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return $todo;
    }
}

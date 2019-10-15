<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todoModel;
use App\Repositories\todoRepository;

class todoController extends Controller
{

    public function __construct()
    {
        $this->todoRepo = new todoRepository();
    }

    public function index()
    {
        $todoList = $this->todoRepo->getAll();
        return view('todo.index', ['todo' => $todoList]);
        // compact($todoList)); 
    }

    public function finished()
    {
        $finishedList = $this->todoRepo->getFinished();
        return view('todo.finished', ['finished' => $finishedList]);
    }

    public function new()
    {
        return view('todo.new');
    }

    public function add(Request $request)
    {
        $this->todoRepo->create($request->deskripsi, 0);
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $todo = $this->todoRepo->getId($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(Request $request)
    {
        $this->todoRepo->update($request->id, $request->desc, $request->status);
        return redirect()->route("home");
    }

    public function delete($id)
    {
        $this->todoRepo->delete($id);
        return back();
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view("todos", ['todos'=>$todos]);
    }

    public function detail(Todo $todo){
        return view("detail", ['todo'=>$todo]);
    }

    public function update(Todo $todo){
        return view("update", ['todo'=>$todo]);
    }

    public function updateConfirm(){

        $this->validate(request(), [
            "title" => "required",
            "description" => "required"
        ]);

        $data = request()->all();
        $todo = Todo::find($data['id']);
        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('todos');
    }

    public function delete($todo){
        $todoToDelete = Todo::find($todo);
        $todoToDelete->delete();
        return redirect('todos');
    }

    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();
        return redirect('/todos');
    }

    public function add(){
        return view("addForm");
    }

    public function addConfirm(){

        $this->validate(request(), [
            "title" => "required",
            "description" => "required"
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->title = $data['title'];
        $todo->description = $data['description'];

        $todo->save();
        return redirect('/todos');

    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->get();

        return view('tasks.index', compact('tasks'));

    }

    public function create()
    {
        return view('tasks.create');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $data = $request->validated();


        $task->update($data);

        return redirect()->route('tasks.index');
    }

    public function store(StoreTaskRequest $request, Task $task)
    {
        $data = $request->validated();

        $data['order_of_presentation'] = Task::count()+1;

        Task::create($data);

        return back()->with(['success' => 'Tarefa criado com sucesso!']);
    }

    public function destroy()
    {
    }

}

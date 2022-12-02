<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class TaskController  extends Controller
{
    public function taskform()
    {
        return view('assignWork');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'assignment' => 'required|min:10'
          ]);

        $task = new Assignment;

        $task->Task = $request->assignment;

        $task->save();

        return redirect('new-task')->with('status', 'Task Added Successfully');

        // return redirect('form')->with('status', 'New Task assigned successfully');

    }

    public function retrive(){

        $tasks = Assignment::orderBy('created_at', 'desc')->get();

        return view('tasks', ['tasks' => $tasks]);
    }

    public function submit(Assignment $task){

        $task->delete();

        return redirect('to-do')->with('status', 'Task Submitted Successfully');

        // return view('tasks', ['tasks' => $tasks]);
    }
}

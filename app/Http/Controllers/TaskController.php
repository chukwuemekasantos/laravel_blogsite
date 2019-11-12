<?php

namespace App\Http\Controllers;


use App\Task;

class TaskController extends Controller
{


   
   

    function index(){
        $name = 'laracast';

        // $task = [
        //     'Go to bed',
        //     'Go to to School',
        //     'Fetch Water'
        // ];
    
        // $task = DB::table('tasks')->get();
    
        $task = Task::all();
    
        //return $task_list;
    
        return view('posts.index', compact('task'));
    }

    function show(Task $task){
         // $task = DB::table('tasks')->find($id);

    //$task = Task::find($id);
    // dd($id);

    return view('tasks.show', compact('task'));

    }
}

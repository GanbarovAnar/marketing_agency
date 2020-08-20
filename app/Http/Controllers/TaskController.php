<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function addTask(Request  $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:200'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
//    dd('');
        $task = new Task();
        $task->name = $request->name;
        $task->email = $request->email;
        $task->phone = $request->phone;
        $task->subject = $request->subject;
        $task->message = $request->message;
//    $task->look = false;
        $task->save();

        return redirect('/');
    }


    public function requests()
    {
        $tasks = Task::where('look','=','false')->orderBy('created_at', 'asc')->get();

        return view('requests', [
            'tasks' => $tasks
        ]);
    }

    public function scannedRequests()
    {
        $tasks = Task::where('look','=',true)->orderBy('created_at', 'asc')->get();

        return view('scanned_requests', [
            'tasks' => $tasks
        ]);
    }

    public function delete(Request $request)
    {
        Task::findOrFail($request->id)->delete();

        return redirect('/scanned_requests');
    }

    public function lookTask(Request $request)
    {
        $task = Task::findOrFail($request->id);
        $task->look = true;
        $task->save();

        return redirect('/requests');
    }
}

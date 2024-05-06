<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    //

    public function create(){
        return view('insert');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
        ]);

       $task=new Task();
       $task->title=$request->title;
       $task->description=$request->description;
       $task->status=$request->status;
       $task->save();
       return redirect()->back()->with('status','Task Added Successfully');



    }

     public function display(){
       $task=Task::all();
       return view('display',compact('task'));
     }

     public function destroy($id){
        $task=Task::find($id);
        $task->delete();
        return redirect()->back()->with('status','Task Deleted Successfully');

     }

     public function edit($id){
        $task=Task::find($id);
        return view('edit',compact('task'));
     }

     public function update(Request $request, $id){
        $task=Task::find($id);
        $task->title=$request->title;
        $task->description=$request->description;
        $task->status=$request->status;
        $task->update();

        return redirect()->back()->with('status','Task Updated Successfully');

     }

}


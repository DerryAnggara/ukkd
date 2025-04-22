<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
class dController extends Controller
{
    public function index(){
        $todo=todo::where('status', '!=', 'done')->get();
        $data=compact('todo');
        return view('welcome')->with($data);
    }
    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'description'=>'required',
        'priority'=>'required',
        'deadline'=>'required',
    ]);
    $todo=new todo;
    $todo->name=$request->name;
    $todo->description=$request->description;
    $todo->priority=$request->priority;
    $todo->deadline=$request->deadline;
    $todo->save();
    return redirect()->route('d.welcome');
    }

    public function delete($id){
        $todo=todo::find($id);
        $todo->delete();
        return redirect()->back();
    }

    public function edit($id){
        $todo=todo::find($id);
        $data=compact('todo');
        return view("update")->with($data);
    }
    public function updateData(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'priority'=>'required',
            'deadline'=>'required',]);

        $id=$request['id'];
        $todo=todo::find($id);
        $todo->name=$request->name;
        $todo->description=$request->description;
        $todo->priority=$request->priority;
        $todo->deadline=$request->deadline;
        $todo->save();
        return redirect()->route('d.welcome');
    }

    public function complete($id)
    {
        $todo=todo::find($id);
        if($todo){
        $todo->status='done';
        $todo->save();
        }
    return redirect()->route('d.welcome');
    }

    public function history()
    {
    $todos=todo::where('status', 'done')->get();
    return view('history',compact('todos'));
    }

}

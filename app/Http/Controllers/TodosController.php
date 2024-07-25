<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class TodosController extends Controller
{
    public function index(){
        $todo= todo:: all();
        $data = compact('todo');
        return view("welcome")->with($data);
    }
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'dueDate'=>'required'
            ]

        
        );
        $todo = new todo;
        $todo->name=$request['name'];
        $todo->work=$request['work'];
        $todo->dueDate=$request['dueDate'];
        $todo->save();

        return redirect(route("todo.home"));
    }

    //public function delete($id){
      //  $todos :: find($id)->delete();
       // return redirect(route("todo.home"));

    //}
  

public function delete($id) {
    $todo = Todo::find($id);
    if ($todo) {
        $todo->delete();
    }
    return redirect()->route('todo.home');
}

public function update($id){
    $todo = Todo::find($id);
    $data = Compact('todo');
    return view("update")->with($data);


}
public function updatedata(Request $request){
    $request->validate(
        [
            'name'=>'required',
            'work'=>'required',
            'dueDate'=>'required'
        ]

    
    );
    $id = $request['id'];
    $todo =  todo::find($id);
    $todo->name=$request['name'];
    $todo->work=$request['work'];
    $todo->dueDate=$request['dueDate'];
    $todo->save();

    return redirect(route("todo.home"));

}


} 
        
    

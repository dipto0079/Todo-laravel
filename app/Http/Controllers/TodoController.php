<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id= Auth::id();
        $data['list'] = Todo::with('Categories')->where('user_id',$user_id)->get();
        return view ('todo.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['todo'] = new Todo();
        $data['categories'] = Category::pluck('name','id');
        return view('todo.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
        $user_id= Auth::user()->id;
        $path=$request->file("image")->store('image/todo');
        $todo = Todo::create([
            "task"=>$request->get('task'),
            "image"=>$path,
            "user_id"=>$user_id,
        ]);
        if (empty($todo)){
            return redirect()->back()->withInput();
        }
        $todo->categories()->attach($request->get('categories'));

        return  redirect()->route('dashboard')->with('SUCCESS',__('Todo has been Created successful'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        $data['todo']=Todo::where('id',$todo->id)->first();
        $data['categories'] = Category::pluck('name','id');
        return view('todo.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TodoRequest $request, Todo $todo)
    {


        if ($request->hasFile('image')){
            Storage::delete($todo->image);
            $path=$request->file("image")->store('image/todo');
        }
        if ($todo->update()){
            $todo->task=$request->get('task');
            $todo->image=$path;
            return  redirect()->route('dashboard')->with('SUCCESS',__('Todo has been update successful'));
        }
        return redirect()->back()->withInput();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data=Todo::where('id',$id)->first()->image;
        Storage::delete($data);
        Todo::where('id',$id)->delete();
        return redirect()->back()->with('SUCCESS',__('Todo has been Delete Successful'));;
    }

    public function complete($id){
        $todo_list = Todo::findorfail($id);
        $todo_list -> is_complete = true;
        $todo_list->update();
        return redirect()->back()->with('SUCCESS',__('Todo has been Complete Successful'));;
        // dd($todo_list);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Todo;
use App\Models\TodoComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function __invoke(){
        $data['todo']=Todo::all();
        return view('index',$data);
    }

    public function singlePost($id){
        $data['single_todo']=Todo::where('id',$id)->first();
        $data['comment']=TodoComment::where('todo_id',$id)->get();
    //    dd($data['comment']);


        return view('single-post',$data);
    }
    public  function store(CommentRequest $request){

        $comment = TodoComment::create([
            "comment"=>$request->get('comment'),
            "users_id"=>$request->get('users_id'),
            "todo_id"=>$request->post_id,
        ]);

        if (empty($comment)){
            return  redirect()->back()->with('Error',__('You must be login'));
        }
        return back();
    }

    public function commentReply($id){

        $data['comment']=TodoComment::where('id',$id)->first();

        return view('Comment.reply',$data);
    }

    public function replyComment(Request  $request){
        //dd($request->all());
        $data = new TodoComment;
        $data->comment_id=$request->comment_id;
        $data->rep_id=$request->rep_id;
        $data->comment_rep=$request->comment_rep;
        $data->save();



    }

}

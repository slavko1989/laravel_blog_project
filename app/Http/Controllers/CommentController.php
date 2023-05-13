<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Auth;

class CommentController extends Controller
{
    public function store_comm(CommentRequest $request,$id){

        $request->validated();

        $comm = new Comment;
        $post = Post::find($id);
        if(Auth::check()){
        $comm->comment = $request->input('comment');
        $comm->post_id = $post->id;
        $comm->user_id = Auth::user()->id;
        $comm->save();
        return redirect()->back()->with('mess_comm','Comment are created');
    }else{

        return redirect()->back()->with('auth_check','Login first to comment');
    }
    }

   
}

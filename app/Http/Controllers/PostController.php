<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use db;

class PostController extends Controller
{
     public function create_post(){
        $category = Category::all();
        $post = Post::latest()->join('categories', 'categories.id', '=', 'posts.cat_id')->get(['posts.created_at','posts.title','posts.body','posts.img','categories.cat_name','categories.id','posts.id']);
        return view('admin/add_post',compact('category','post'));
    }

    public function store_post(PostRequest $request){
        $request->validated();

        $post = new Post;
        $post->cat_id = $request->input('cat_id');
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $images = $request->img;

        if($images){
            $img_name = time().'.'.$images->getClientOriginalExtension();
            $request->img->move('post_img',$img_name);
            $post->img = $img_name;
            
        $post->save();

      return redirect()->back()->with('create_post','New Post are created');
    }else{
        return redirect()->back()->with('error_create_post','New Post are not created');
        }
    }

    public function delete_post($id){

        $delete = Post::where('id',$id)->firstOrFail();
        $delete->delete();
        return redirect()->back()->with('delete_post','Post are deleted'); 
    }

    public function edit_post($id){
        $category = Category::all();
        $edit_post = Post::where('id',$id)->first();
        return view('admin/edit_post',compact('edit_post','category'));
    }

    public function update_post(PostRequest $request,$id){
        $request->validated();

        $post = Post::find($id);
        $post->cat_id = $request->input('cat_id');
        $post->id = $request->input('id');
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $images = $request->img;

        if($images){
            $img_name = time().'.'.$images->getClientOriginalExtension();
            $request->img->move('post_img',$img_name);
            $post->img = $img_name;
            
        $post->update();

      return redirect()->back()->with('update_post','Post are updated');
    }else{
        return redirect()->back()->with('error_update_post','Post are not updated');
        }
    }

    public function post_by_cat($id){
        $cat = Category::all();
        $category_post = Category::find($id);
        return view('users_views/post_by_cat',compact('category_post','cat'));
    }

    public function single_post($id){
        $cat = Category::all();
        $single_post = Post::where('id', $id)->get();
        return view('users_views/single_post',compact('single_post','cat'));
    }

    public function search(Request $request){

        $search = $request->input('search');
        $cat = Category::all();
        $details = Post::where('title','like', '%' . $search . '%')->orWhere('body','like', '%' . $search . '%')->get();
        return view('users_views/search',compact('details','cat'));
    }
}

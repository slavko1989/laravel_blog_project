<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Tag;
use DB;
use Auth;
use App\Models\User;
class AdminController extends Controller
{
   
 public function logout(Request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You are logout');
    }

    public function index(){
        
        $cat = Category::all();
        $tag = Tag::all();
        $post = Post::latest()->paginate('3');



        $lastPost = Post::latest()->take(3)->get();
  
        return view('/index',compact('cat','post','tag','lastPost'));
    }

    public function admin_home(){
        
        $countComm = db::table('comments')->count();
        $countUser = db::table('users')->count();
        $countCat = db::table('categories')->count();
        $countPosts = db::table('posts')->count();
        return view('admin/index',compact('countComm','countUser','countCat','countPosts'));
    }

    


}

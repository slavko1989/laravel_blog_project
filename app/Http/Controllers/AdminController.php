<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Post;

class AdminController extends Controller
{
   
    public function index(){
        $cat = Category::all();
        $post = Post::paginate('3');
        return view('/index',compact('cat','post'));
    }

    public function admin_home(){
        return view('admin/index');
    }

    


}

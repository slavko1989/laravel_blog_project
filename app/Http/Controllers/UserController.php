<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;

class UserController extends Controller
{
   

   public function add_users(){
   	$users =  User::latest('created_at')->get();
   	return view('admin/add_user',compact('users'));
   }

   public function store_users(){

   }

   public function delete_user(){

   }

   public function update_user(){

   }
   public function edit_user(){

   }

   public function edit_comm($id){

      $edit = Comment::where('id',$id)->first();
      return view('users_views/edit_comm',compact('edit'));
   }

   public function update_comm(Request $request, $id){

      $update = Comment::find($id);
      $update->comment = $request->input('comment');
      $update->update();
      return redirect('users_views/single_post/'. $update->post_id)->with('update_comm','Comment are updated');
   }

   public function delete_comm_page($id){

      return view("users_views/delete_comm");
   }

    public function delete_comm($id){
      $comm = Comment::where('id',$id)->firstOrFail();

      $comm->delete();

     return redirect('users_views/single_post/'. $comm->post_id)->with('delete_comm','Comment are deleted'); 
    }
}

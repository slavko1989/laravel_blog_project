<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

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
}

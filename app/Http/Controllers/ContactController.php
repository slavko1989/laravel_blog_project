<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact_page(){
        $cat= Category::all();
        $tag = Tag::all();
        $lastPost = Post::latest()->take(3)->get();
        return view('users_views/contact_page',compact('lastPost','tag','cat'));
    }

    public function send_contact_mail(Request $request){
        Mail::to('slavko.slave1989@gmail.com')->send(new ContactMail($request));
        return redirect()->back()->with('mess','Message is sent');
    }
}

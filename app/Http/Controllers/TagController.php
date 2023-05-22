<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\TagController;
use App\Models\Tag;

class TagController extends Controller
{
     public function create_tag(){

        $tag =  Tag::latest('created_at')->get();
        return view('admin/add_tag',compact('tag'));
    }

    public function store_tag(TagRequest $request){

        $request->validated();

        $tag = new Tag;
        if($tag){
        $tag->tag_name = $request->input('tag_name');
        $tag->save();
        return redirect()->back()->with('mess_true_tag','Tag stored to database');
            }else{
                return redirect()->back()->with('mess_false_tag','Tag not stored to database');
            }
    }

    public function delete_tag($id){

        $tag = Tag::where('id',$id)->firstOrFail();
        $tag->delete();
        return redirect()->back()->with('mess_del_tag','Tag is successfully deleted');
    }

    public function edit_tag($id){
        $edit_tag = Tag::where('id',$id)->first();
        return view('admin/edit_tag',compact('edit_tag'));

    }

    public function update_tag(TagRequest $request,$id){

        $request->validated();

        $tag = Tag::find($id);
        if($tag){
        $tag->id = $request->input('id');
        $tag->tag_name = $request->input('tag_name');
        $tag->update();
        return redirect()->back()->with('mess_true_edit_tag','Tag is change');
            }else{
                return redirect()->back()->with('mess_false_edit_ta','Tag doesnt change');
            }


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create_cat(){

        $cat =  Category::latest('created_at')->get();
        return view('admin/add_cat',compact('cat'));
    }

    public function store_cat(CategoryRequest $request){

        $request->validated();

        $cat = new Category;
        if($cat){
        $cat->cat_name = $request->input('cat_name');
        $cat->save();
        return redirect()->back()->with('mess_true_cat','Category stored to database');
            }else{
                return redirect()->back()->with('mess_false_cat','Category not stored to database');
            }
    }

    public function delete_cat($id){

        $cat = Category::where('id',$id)->firstOrFail();
        $cat->delete();
        return redirect()->back()->with('mess_del_cat','Category is successfully deleted');
    }

    public function edit_cat($id){
        $edit_cat = Category::where('id',$id)->first();
        return view('admin/edit_cat',compact('edit_cat'));

    }

    public function update_cat(CategoryRequest $request,$id){

        $request->validated();

        $cat = Category::find($id);
        if($cat){
        $cat->id = $request->input('id');
        $cat->cat_name = $request->input('cat_name');
        $cat->update();
        return redirect()->back()->with('mess_true_edit_cat','Category is change');
            }else{
                return redirect()->back()->with('mess_false_edit_cat','Category doesnt change');
            }


    }
}

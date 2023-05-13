<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['cat_id','title','img','body'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'post_id','id');
    }

}

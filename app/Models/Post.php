<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['cat_id','title','img','body','tag_id'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');
    }

    public function tag(){
        return $this->belongsTo(Tag::class,'tag_id','id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'post_id','id');
    }
    public function lastComments()
    {
    return $this->hasMany(Comment::class, 'post_id','id')->orderBy('created_at')->take(3);
    }

}

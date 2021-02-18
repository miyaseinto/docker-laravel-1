<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = [
        'user_id', 'category_id', 'content', 'title', 'image'
    ];
    
    public function category(){
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo(\App\Models\Category::class,'category_id');
    }

    public function user(){
        return $this->belongsTo(\App\Models\User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(\App\Models\Comment::class,'post_id', 'id');
    }

    public function tags(){
        return $this->belongsToMany(\App\Models\Tag::class);
    }
}

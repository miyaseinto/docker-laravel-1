<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'comment'
    ];

    public function user(){
        return $this->belongsTo(\App\Models\User::class,'user_id');
      }
}

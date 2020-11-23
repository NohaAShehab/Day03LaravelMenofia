<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=["title","body"];

    public function path(){
        return (route('posts.show',$this));
    }

    public function user(){
        return $this->belongsTo(User::class); #laravel looks for the user_id
        #related to the user.
    }

    # if you need to call it author, override the foreignkey parameter
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}

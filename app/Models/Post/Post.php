<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    

    protected $fillable = [
        "title",
        "subtitle",
        "body",
        "user_id",
        "status",
        "views"
    ];
}

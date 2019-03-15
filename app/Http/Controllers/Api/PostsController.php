<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostsController extends Controller
{
    public function index(){
        return PostResource::collection(Post::all());

        // return Post::all();
    }

    public function showUsers(){
        return PostResource::collection(User::all());

        // return Post::all();
    }

    public function show(Post $post){
        return new PostResource($post);
    }
}

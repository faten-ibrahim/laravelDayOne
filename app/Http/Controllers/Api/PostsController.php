<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Requests\post\StorePostRequest;

class PostsController extends Controller
{
    public function index(){
        // {{ $posts->links() }}
        // return PostResource::collection(Post::paginate(2));
        return PostResource::collection(Post::all());

    }

    public function showUsers(){
        return UserResource::collection(User::all());
        
    }
    
    public function show(Post $post){
        return new PostResource($post);
    }

    public function store(StorePostRequest $request){
        Post::create($request->all());
        return response()->json(
            [
                'message'=>'Congratulations Your Post created successfully',
            ]
        
        , 200);
    }
}

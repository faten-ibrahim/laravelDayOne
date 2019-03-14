<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    // 'posts' => Post::paginate(2),

    public function create()
    {
        $users = User::all();
        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function store()
    {
        Post::create(request()->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update($post){
        // $newPost = Post::find($post);

        // $newPost= request()->all();

        // $newPost->save();
       
        Post::find($post)->update(request()->all());
        return redirect()->route('posts.index');
    }
    
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function delete(Post $post){
        // $post = Post::find($post->id);
        $post->delete();
        return redirect()->route('posts.index');
    }
    // public function destroy($post)
    // {
    //     return view('posts.destroy', [
    //         'post' => $post,
    //     ]);
    // }

}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests\post\StorePostRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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

    public function store(StorePostRequest $request)
    {
        
        // dd($request);
        //$t=$request->input('title');
        
       // $slug = SlugService::createSlug(Post::class,'slug', $request->input('title'),['unique' => false]);

        // dd($slug);
        // Post::create([
        //     'title' => request('title'),
        //     'description ' => request('description'),
        //     'user_id' => auth()->id(),
        //     ]);

        //$request->input('slug')=$slug;
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Post $post,StorePostRequest $request){
        // $newPost = Post::find($post);

        // $newPost= request()->all();

        // $newPost->save();
       
        $post->update($request->all());
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

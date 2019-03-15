@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Created At</th>
        <th class="col">Action</th>
        </tr>
    </thead>

    <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{ isset($post->user) ? $post->user->name : 'Not Defined'}}</td>
        
        <td>{{date('Y-m-d', strtotime($post->created_at)) }}</td>
        <td>
            <a href="{{route('posts.show', ['post' => $post->id])}}" class="btn btn-primary">View</a>
            <a href="{{route('posts.edit',['post' => $post->id])}}" class="btn btn-info">Edit</a>
          
            <form  action="{{route('posts.delete',['post' => $post->id])}}" method="Post" style="display:inline; float:left; margin-right:10px;">
              @csrf
             @method('DELETE')
       

            <button type="submit" onclick="return confirm('Are you Sure !')" class="btn btn-danger">Delete</button>
            </form>

        </td>
      </tr>
    @endforeach
   
    </tbody>
  </table>  
  {{ $posts->links() }}
  <br>
  <br>
  <a class="btn btn-success" href="{{route('posts.create')}}">Add New Post</a>
</div>  


@endsection

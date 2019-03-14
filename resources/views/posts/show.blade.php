@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Author</th>
        </tr>
    </thead>

    <tbody>
      <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>{{ isset($post->user) ? $post->user->name : 'Not Defined'}}</td>
      </tr>
    </tbody>
  </table>  
  <br>
  <br>
  <a class="btn btn-primary" href="{{route('posts.index')}}">Back</a>
</div>  


@endsection

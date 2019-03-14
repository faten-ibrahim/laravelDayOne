 @extends('layouts.app')

 @section('content')
 <br>
<div class="container">
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<br>
<br>
    <form action="{{route('posts.update',['post' => $post->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" value="{{$post->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control">{{$post->description}}</textarea>
        </div>

    <button type="submit" class="btn btn-primary"  style="display:inline; float:left;" >Submit</button>
    </form>
    <a href="{{route('posts.index')}}" class="btn btn-danger" style="display:inline; float:left; margin-left:10px;">Back</a>

</div>
@endsection
 
@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-12">
    <br>
    <img src="{{asset($blog->image)}}" class="card-img-top" style="width:auto height:60%;">
    <h3>{{$blog->title}}</h3>
    <hr>
    <p class="lead">
      {{$blog->content}}
    </p>

    <a href="{{route('edit_blog_path', ['blog' => $blog->id])}}"class="btn btn-outline-info">Edit</a>

    <a href="{{route('blogs_path')}}"class="btn btn-outline-primary">Back</a>


<a href= "{{route('delete_blog_path',['blog'=> $blog->id] )}}" class="btn btn-outline-danger">Delete</a>

  </div>



</div>


@endsection

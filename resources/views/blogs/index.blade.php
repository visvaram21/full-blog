@extends('layouts.app')

@section('content')

  @if (session('status'))
  <div class="col">
  <br>
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
  </div>
  @endif
<div class="container" style="position: initial">
<div class="row">
  @foreach($blogs as $blog)


  <div class="col-md-6">
    <br><br>
    <div class="card">



      <div class="card-header">
        <a href="{{route('blog_path',['blog' => $blog->id])}}">{{ $blog->title}}</a>

      </div>


      <div class="card-body">



        <a href="{{route('blog_path',['blog' => $blog->id])}}">
        <img src="{{asset($blog->image)}}" alt="" class="card-img-top">
        </a>
        <br><br>
        {!! nl2br($blog->content) !!}


  <br><br>

  <style>
  div.lead {
    font-size: 18px;
  }
  </style>

          <div class="lead">
            posted
            {{$blog->created_at->diffForHumans()}}
          </div>

          <a href="{{route('blog_path', ['blog' =>$blog->id])}}" class="btn btn-outline-primary">View Post</a>


      </div>
    </div>


  </div>

    @endforeach


</div>
</div>



@endsection

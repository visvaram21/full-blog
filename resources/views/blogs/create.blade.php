@extends('layouts.app')

@section('content')
<form action="{{route('store_blog_path')}}" method="post" enctype="multipart/form-data">

  @csrf

  <div class="form-group">
    <label for="title">Title</label>
    <input type="texta" name="title" class="form-control">
  </div>

<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control"></textarea>
</div>

    <div class="form-group">
      <input type="file" name="images" >

    </div>


<div class="form-group">
  <button type="submit" class="btn btn-outline-primary">Add Post</button>

</div>
</form>


@endsection

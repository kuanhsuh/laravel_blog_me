@extends('layouts.master')

@section('content')
<div class="col-sm-8">
  <h1>Edit a post</h1>
  <form action="/posts/{{$post->id}}" method="POST">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Post Title</label>
      <input name="title" type="text" class="form-control" value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Post Body</label>
      <textarea name="body" class="form-control" rows="15">{{ $post->body }}</textarea>
    </div>
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit" class="btn btn-primary">Edit</button>
    <hr>
    @include('layouts.errors')
  </form>
</div>
@endsection
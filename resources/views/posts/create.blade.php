@extends('layouts.master')

@section('content')
<div class="col-sm-8">
  <h1>Create a post</h1>
  <form method="POST" action="/posts">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Post Title</label>
      <input name="title" type="text" class="form-control" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Post Body</label>
      <textarea name="body" class="form-control" placeholder="Enter Post Body" rows="15"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection
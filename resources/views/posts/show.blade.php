@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    <div class="blog-post">
      <h2 class="blog-post-title">{{ $post->title }}</h2>
      <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">Mark</a></p>
      <p>{{ $post->body }}</p>
    </div><!-- /.blog-post -->
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info btn-lg">Edit</a>
    <form class="d-inline" action="/posts/{{$post->id}}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button class="btn btn-danger btn-lg d-inline">Delete</button>
    </form>
</div><!-- /.blog-main -->
@endsection
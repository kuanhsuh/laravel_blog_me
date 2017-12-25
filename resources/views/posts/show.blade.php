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
    <hr>
    <ul>
        @foreach($post->comments as $comment)
            <li>{{ $comment->body}}</li>
        @endforeach
    </ul>
    <h2>Add Comment</h2>
    <form action="/posts/{{$post->id}}" method="POST">
        {{ csrf_field() }}
        <textarea name="body" class="form-control" rows="6"></textarea>
        <br>
        <button class="btn btn-primary btn-md">Add Comment</button>
    </form>
</div><!-- /.blog-main -->
@endsection
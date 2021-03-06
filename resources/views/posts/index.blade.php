@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">
    @foreach($posts as $post)
      <div class="blog-post">
        <a href="/posts/{{$post->id}}">
          <h2 class="blog-post-title">{{ $post->title }}</h2>
        </a>
        <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">{{$post->user->name}}</a></p>
        <p>{{ $post->body }}</p>
      </div><!-- /.blog-post -->
    @endforeach
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

</div><!-- /.blog-main -->
@endsection
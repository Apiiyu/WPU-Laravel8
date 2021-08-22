@extends('layouts.app')

@section('content')
  <article>
    <h2 class='post-title'>{{ $post->title }}</h2>
    <h6 class='post-authors'>{{ $post->authors }}</h6>
    
    <div class="post-body">
      {!! $post->body !!}
    </div>
  </article>

  <a href="/posts" class="btn btn-primary">Back to Blog</a>
@endsection
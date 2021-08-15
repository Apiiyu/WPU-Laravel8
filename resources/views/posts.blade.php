@extends('layouts.app')

@section('content')
  <article class='mb-5'>
    @foreach ($blog as $BlogPosts)
      <h2 class='post-title'>
        <a href="/posts/{{ $BlogPosts['slug'] }}">{{ $BlogPosts['title'] }}</a>
      </h2>
      <h6 class='post-authors'>By: {{ $BlogPosts['authors'] }}</h6>
      <p class='post-body'>{{ $BlogPosts['body'] }}</p>
    @endforeach
  </article>
@endsection
@extends('layouts.app')

@section('content')
  <article class='mb-5'>
    @foreach ($blog as $BlogPosts)
      <h2>
        <a href="/posts/{{ $BlogPosts['slug'] }}">{{ $BlogPosts['title'] }}</a>
      </h2>
      <h6>By: {{ $BlogPosts['authors'] }}</h6>
      <p>{{ $BlogPosts['body'] }}</p>
    @endforeach
  </article>
@endsection
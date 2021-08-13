@extends('layouts.app')

@section('content')
  <article>
    <h2>{{ $post['title'] }}</h2>
    <h6>{{ $post['authors'] }}</h6>
    <p>{{ $post['body'] }}</p>
  </article>

  <a href="/posts" class="btn btn-primary">Back to Blog</a>
@endsection
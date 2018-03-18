@extends('main')

@section('title', "| $post->title ")

@section('content')

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body }}</p>
      <hr />
      <p>Posted In: {{ $post->category->name }}</p>
      <p>Created at: {{ $post->category->created_at }}</p>
      <p>Updated at: {{ $post->category->updated_at }}</p>
    </div>
  </div>

@endsection

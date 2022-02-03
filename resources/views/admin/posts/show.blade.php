@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
      </div>
    
      <div class="row my-5">
        <a href="{{route('admin.posts.edit', $post)}}" class="btn btn-success mr-5">EDIT</a>
        <a href="" class="btn btn-danger">DELETE</a>

      </div>
    </div>
@endsection

@section('title')
    {{$post->title}}
@endsection
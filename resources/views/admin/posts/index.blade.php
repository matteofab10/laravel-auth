@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Elenco posts</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" colspan="4">TITOLO</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
                
              <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td><a href="{{route('admin.posts.show', $post)}}" class="btn btn-info">SHOW</a></td>
                <td><a href="{{route('admin.posts.edit', $post)}}" class="btn btn-success">EDIT</a></td>
                <td><a href="#" class="btn btn-danger">DELETE</a></td>

                
              </tr>

            @endforeach
          </tbody>
        </table>

    </div>
</div>
@endsection

@section('title')

   | Elenco post
    
@endsection
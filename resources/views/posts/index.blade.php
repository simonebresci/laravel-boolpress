@extends('layouts.base')
@section('title','Index Post')

@section('content')
    <h1>Posts</h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Author_id</th>
            <th scope="col">Author</th>
            <th scope="col">Tags</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr class="post-record">

            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->author_id}}</td>
            <td>{{$post->author->name}}</td>
            <td>
              @foreach ($post->tags as $tag)
                {{$tag->name}},
              @endforeach
          </tr>
          @endforeach

       </tbody>
     </table>

@endsection

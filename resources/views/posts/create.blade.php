@extends('layouts.base')
@section('title','Create Post')

@section('content')
    <h1>Posts</h1>

     <form action={{route('posts.store')}} method="post">
       @csrf
       @method('POST')
      {{-- Title --}}
      <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="title">
      </div>

      {{-- Body --}}
      <div class="form-group">
      <label for="body">Body</label>
      <textarea class="form-control" id="body" name="body" rows="3"></textarea>
      </div>

      {{-- Author --}}
      <div class="form-group">
        <label for="author_id">Author</label>
        <select class="form-control" name="author_id" id="author_id">
          @foreach($authors as $author)
            <option value="{{$author->id}}">{{$author->name}}</option>
          @endforeach
        </select>
      </div>

      {{-- Tags --}}
      <div class="form-group">
      <label for="tags[]">Tags</label>
      <select multiple class="form-control" name="tags[]" id="tags">
        @foreach($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
      </select>
      </div>

      <button type="submit" class="btn btn-primary">Create</button>

    </form>

@endsection

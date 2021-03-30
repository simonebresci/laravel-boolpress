@extends('layouts.base')
@section('title','Create Post')

@section('content')
    <h1>Posts</h1>

      @dump($authors)

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
            <option value="{{$author->id}}">{{$author->id}}{{$author->name}}</option>
          @endforeach
        </select>
      </div>

      {{-- Tags --}}
      {{-- <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      </div> --}}

      <button type="submit" class="btn btn-primary">Create</button>

    </form>

@endsection

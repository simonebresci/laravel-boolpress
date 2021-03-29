@extends('layouts.base')
@section('title','Index Authors')

@section('content')
    <h1>Authors</h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Avatar</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($authors as $author)
          <tr class="author-record">

            <td>{{$author->id}}</td>
            <td><img class="author-index-icon rounded" src="{{$author->details->avatar}}" alt="icona author"></td>
            <td>{{$author->name}}</td>
            <td>{{$author->email}}</td>
            <td>{{$author->details->phone}}</td>
            <td>{{$author->details->address}}</td>

          </tr>
          @endforeach

       </tbody>
     </table>

@endsection

@extends('layouts.base')
@section('title','Index Authors')

@section('content')
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
            {{-- <td><img class="author-index-icon" src="{{$author->avatar}}" alt="icona author"></td> --}}
            <td>{{$author->name}}</td>

            <td>{{$author->email}}</td>
            {{-- <td>{{$author->details->phone}}</td>
            <td>{{$author->details->address}}</td>
            <td>{{$author->details->avatar}}</td> --}}

          </tr>
          @endforeach

       </tbody>
     </table>

@endsection
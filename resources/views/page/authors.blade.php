@extends('layout.layout')

@section('title')
  authors
@endsection

@section('content')
  <div class="h-100 mt-5 p5">
    <h4>Select an authors:</h4>
    <ul>
      @foreach($authors as $author)

        <li><a href="{{route('authors.show', $author->id)}}">{{$author->name}} {{$author->lastname}}</a></li>
      @endforeach
    </ul>
  </div>
@stop

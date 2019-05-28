@extends('layout.layout')

@section('title')
  categories
@endsection

@section('content')
  <h4>Select a category:</h4>
  <ul>
    @foreach($categories as $category)

      <li><a href="{{route('categories.show', $category->id)}}">{{$category->category_name}}</a></li>

    @endforeach

  </ul>
@stop

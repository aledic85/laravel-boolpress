@extends('layout.layout')

@section('content')

  <form action="{{route('boolpress.store')}}" method="post">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" value=""><br>
    <label>Category:</label><br>
      @foreach($categories as $category)
        <input type="checkbox" name="categories[{{$category->category_name}}]" value="{{$category->id}}"> {{$category->category_name}}<br>
      @endforeach
    <label>Content:</label><br>
    <textarea class="form-control" name="content"></textarea><br><br>
    <button type="submit" name="button">Create!</button>
  </form>
@stop

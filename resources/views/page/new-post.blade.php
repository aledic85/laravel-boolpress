@extends('layout.layout')

@section('content')

  <form class="mt-5" action="{{route('boolpress.store')}}" method="post">
    @csrf

    <label>Title:</label><br>
    <input type="text" name="title" value=""><br>
    <label>Author Name:</label><br>
    <input type="text" name="name" value=""><br>
    <label>Author Lastname:</label><br>
    <input type="text" name="lastname" value=""><br>
    <label>Category:</label><br>
      @foreach($categories as $category)
        <input type="checkbox" name="categories[]" value="{{$category->id}}"> {{$category->category_name}}<br>
      @endforeach
    <label>Content:</label><br>
    <textarea rows="4" cols="50" class="form-control" name="content"></textarea><br><br>
    <button type="submit" name="button">Create!</button>
  </form>
@stop

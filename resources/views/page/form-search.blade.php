@extends('layout.layout')

@section('title')
  Search Post
@endsection

@section('content')
  <div class="wrap mt-5 p-5">
    <form class="" action="{{route('search-post')}}">
      <label>Title:</label><br>
      <input type="text" name="title" value=""><br><br>
      <label>Content:</label><br>
      <input type="text" name="content" value=""><br><br>
      <label>Author:</label><br>
      <select name="author">
        <option value="">Choose author</option>
        @foreach($authors as $author)

          <option value="{{$author->name}}" name="">{{$author->name}}</option>
        @endforeach
      </select><br><br>
      <label>Categories:</label><br>
      <select name="category">
        <option value="">Choose category</option>
        @foreach($categories as $category)

          <option value="{{$category->category_name}}" name="">{{$category->category_name}}</option>
        @endforeach
      </select><br><br>
      <button type="submit">Search!</button>
    </form>
  </div>
@stop

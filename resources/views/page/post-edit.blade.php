@extends('layout.layout')

@section('content')

  <form action="{{route('boolpress.update', $post->id)}}" method="post">
    @csrf
    @method('PATCH')

    <label>Title:</label><br>
    <input type="text" name="title" value="{{$post->title}}"><br>
    <label>Category:</label><br>
      @foreach($categories as $category)
        <input type="checkbox" name="categories[]" value="{{$category->id}}"
          @foreach($post->categories as $value)
            @if($category->category_name == $value->category_name)
              checked
            @endif
          @endforeach
        > {{$category->category_name}}<br>
      @endforeach
    <label>Content:</label><br>
    <textarea class="form-control" name="content" value="{{$post->content}}">{{$post->content}}</textarea><br><br>
    <button type="submit" name="button">Update!</button>
  </form>
@stop

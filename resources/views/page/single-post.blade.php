@extends('layout.layout')

  @section('title')
    {{$post->title}}
  @endsection

  @section('content')

    <h1>Title: {{$post->title}}</h1>
      <h5>Categories:</h5>
      @foreach($post->categories as $category)
        <h6>{{$category->category_name}}</h6>
      @endforeach
    <p>{{$post->content}}</p>  
  @stop

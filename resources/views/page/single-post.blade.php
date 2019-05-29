@extends('layout.layout')

  @section('title')
    {{$post->title}}
  @endsection

  @section('content')

    <h1 class="mt-5">Title: {{$post->title}}</h1>
      <h5>Categories:</h5>
      <h5 class="card-title">Author: {{$post->author->name}} {{$post->author->lastname}}</h5>
      @foreach($post->categories as $category)
        <h6><a href="{{route('categories.show', $category->id)}}">{{$category->category_name}}</a></h6>
      @endforeach
    <p>{{$post->content}}</p>
  @stop

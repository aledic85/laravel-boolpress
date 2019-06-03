@extends('layout.layout')

  @section('title')
    {{$post->title}}
  @endsection

  @section('content')

    <div class="wrap mt-5 p-5">
      <h1 class="mt-5">Title: {{$post->title}}</h1>
      <h5 class="card-title">Author: <a href="{{route('authors.show', $post->author->id)}}">{{$post->author->name}} {{$post->author->lastname}}</a></h5>
      <h5>Categories:</h5>
      @foreach($post->categories as $category)
        <h6><a href="{{route('categories.show', $category->id)}}">{{$category->category_name}}</a></h6>
      @endforeach
      <p>{!! $post->content !!}</p>
    </div>
  @stop

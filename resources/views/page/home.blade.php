@extends('layout.layout')

@section('content')
    @foreach($posts as $post)
      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Title: {{$post->title}}</h5>
          <h5 class="card-title">Category: @foreach ($post->categories as $category)
                                                {{$category->category_name}}
                                              @endforeach</h5>
          <p class="card-text">{{$post->content}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach
@stop

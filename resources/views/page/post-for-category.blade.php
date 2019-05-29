@extends('layout.layout')

@section('content')
  <div class="row align-items-center justify-content-center mt-5">
    @foreach($category->posts as $post)
      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Title: {{$post->title}}</h5>
          <p class="card-text">{{$post->content}}</p>
          <a href="{{route('boolpress.show', $post->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endforeach
  </div>
@endsection

@extends('layout.layout')

@section('content')

  <h1>Last five posts:</h1>
    @for($i = count($posts)-1; $i > count($posts)-6; $i--)
      <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Title: {{$posts[$i]['title']}}</h5>
          <h5 class="card-title">Category: @foreach ($posts[$i]->categories as $category)
                                                {{$category->category_name}}
                                              @endforeach</h5>
          <p class="card-text">{{$posts[$i]['content']}}</p>
          <a href="{{route('boolpress.show', $posts[$i]['id'])}}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    @endfor
@stop

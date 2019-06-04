@extends('layout.layout')

@section('content')
  <h1>Contact us</h1>
  <form  action="{{route('send-mail')}}" method="post">
    @csrf
    @method('POST')
    <div class="wrap mt-5 p-5">
      <label for="title">Title:</label><br>
      <input type="text" name="title" value=""><br>
      <label for="title">Name:</label><br>
      <input type="text" name="name" value="{{ Auth::user()->name }}"><br>
      <label for="title">Lastname:</label><br>
      <input type="text" name="lastname" value="{{ Auth::user()->lastname }}"><br>
      <label for="title">Email:</label><br>
      <input type="text" name="email" value="{{ Auth::user()->email }}"><br>
      <label for="description">Description:</label><br>
      <textarea name="description" rows="8" cols="80"></textarea><br><br>
      <button type="submit">Send Mail</button>
    </div>
  </form>
@stop

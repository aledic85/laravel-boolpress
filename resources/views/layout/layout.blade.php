<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta charset="utf-8">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
     <title>@yield('title', 'Boolpress')</title>
   </head>
   <body>
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
        <a class="navbar-brand text-primary" href="{{route('boolpress.index')}}"><h1>Boolpress</h1></a>
        <a class="navbar-brand" href="{{route('categories.index')}}"><span>View all posts by category</span></a>
        <a class="navbar-brand" href="{{route('authors.index')}}"><span>View all posts by author</span></a>
        <a class="navbar-brand" href="{{route('boolpress.create')}}"><span>Create new post</span></a>
      </nav>
      <div class="container mt-5 p-5 h-100">
        <div class="row h-100 w-100 flex-column align-items-center justify-content-center mt-5">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          @if (session('success'))
            <div class="alert alert-success">
              <div class="container">
                {{ session('success') }}
              </div>
            </div>
          @endif
          @yield('content')
        </div>
      </div>
     <footer class="d-flex flex-column align-items-center text-primary bg-dark">
       <h1>Hello from footer</h1>
     </footer>
   </body>
 </html>

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
        <div class="d-none d-lg-flex flex-wrap align-items-center justify-content-between">
          <a class="navbar-brand text-primary" href="{{route('boolpress.index')}}"><h1>Boolpress</h1></a>
          <a class="navbar-brand" href="{{route('categories.index')}}"><span>View all posts by category</span></a>
          <a class="navbar-brand" href="{{route('authors.index')}}"><span>View all posts by author</span></a>
          <a class="navbar-brand" href="{{route('create-new-post')}}"><span>Create new post</span></a>
          <a class="navbar-brand" href="{{route('form-search')}}"><span>Search post</span></a>
          <a class="navbar-brand" href="{{route('contact-us')}}"><span>Contact us</span></a>

        </div>
        <div class="hamb-menu d-block d-lg-none">
          <i class="fas fa-bars text-primary"></i>
          <div class="hamb-items bg-dark">
            <a class="navbar-brand text-primary" href="{{route('boolpress.index')}}"><span>Home</h1></span>
            <a class="navbar-brand" href="{{route('categories.index')}}"><span>View all posts by category</span></a>
            <a class="navbar-brand" href="{{route('authors.index')}}"><span>View all posts by author</span></a>
            <a class="navbar-brand" href="{{route('create-new-post')}}"><span>Create new post</span></a>
            <a class="navbar-brand" href="{{route('form-search')}}"><span>Search post</span></a>
            <a class="navbar-brand" href="{{route('contact-us')}}"><span>Contact us</span></a>
          </div>
        </div>
        @guest
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
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
     <footer class="d-flex flex-column align-items-center justify-content-center text-primary bg-dark">
       <span>created by aledic85</span>
       <div class="contacts w-50 d-flex align-items-center justify-content-around">
         <a href="https://www.facebook.com/alessio.dicuollo" target="_blank"><i class="fab fa-facebook-f"></i></a>
         <a href="https://www.linkedin.com/in/alessio-di-cuollo-fullstack-developer/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
         <a href="https://github.com/aledic85" target="_blank"><i class="fab fa-github"></i></a>
       </div>
     </footer>
   </body>
 </html>

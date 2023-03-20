<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('header')
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">
            
        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog/">Our Blog</a>
                                </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ url('profile') }}" >
                                       My Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ url('reset-password') }}" >
                                      Change Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-5">
        <div class="container">
        <div class="row">
            <div class="col-sm-12"> 
        <div class="row">
            <div class="col-sm-9">
                    @yield('content')
            </div>
                <div class="col-sm-3">  
                            <div class="mb-4 bg-white p-3">
                                <h4>Search</h4>
                                <form action="{{ url('blog/') }}" method="get"> 
                                    <div class="form-group">
                                        <input type="text" name="search" class="form-control" value="{{ old('search') }}" />
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="submit"  class="btn btn-md btn-block btn-success" value="Search" />
                                    </div>
                                </form>
                            </div>  
                            <div class="mb-4 bg-white p-3">
                                <h4>Recent Posts</h4>
                                <ul class="links">
                                    @foreach ( $recent_posts as $recent_post )
                                        <a href="{{ url('/blog'.'/'.$recent_post->slug) }}"><li>{{ $recent_post->title }}</li></a>
                                    @endforeach
                                </ul>
                            </div>  
                            <div class="mb-4 bg-white p-3">
                                <h4>Popular Posts</h4>
                                <ul>
                                    <li> ii </li>
                                </ul>
                            </div>  
                </div>
        </div> 
            </div>
        </div>
    </div>
        </main>
    </div>
</body>
</html>

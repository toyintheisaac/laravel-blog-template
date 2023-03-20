<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    @yield('header')
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    {{ config('app.name', 'Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
  

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog/">My Blog</a>
                                </li> 
                         
                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('Login') }}</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('Register') }}</a>
                                </li> 
                     
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Isaac Toyin
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ route('profile') }}" >
                                    My Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('change_password') }}" >
                                    Change Password
                                    </a>
                                    <a class="dropdown-item" href="" >
                                        {{ __('Logout') }}
                                    </a> 
                                </div>
                            </li>
                        
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
                                <form action="" method="get">
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
                                        <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                        <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                        <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                        <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                        <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a> 
                                    
                                </ul>
                            </div>  
                            <div class="mb-4 bg-white p-3">
                                <h4>Popular Posts</h4>
                                <ul class="links">
                                    <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                    <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                    <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                    <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a>
                                    <a href="{{ route('blog.show','slug') }}"><li>Title Title Title</li></a> 
                                </ul>
                            </div>  
                </div>
        </div> 
            </div>
        </div>
    </div>
        </main>
    </div>
    @yield('script')
</body>
</html>

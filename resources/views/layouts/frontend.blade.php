<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="Shortcut Icon" href="/img/favicon.ico" type="image/x-icon" data-markup-id="jupiterx_favicon">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/front.css">
    <link rel="stylesheet" href="/css/custom.css">
    
    
    <style>
        body{
            padding-top: 0;
        }
    </style>
    <!-- Styles -->
    @stack('css')
</head>
<body>
    @php
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){ $protocol = "https://".$_SERVER['HTTP_HOST']; } else{ $protocol='http://'.$_SERVER['HTTP_HOST']; }
    @endphp
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src = "/img/logo.png"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>           
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mr-auto">
                        <form action="" class="searchform">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-search" type="button">
                                    <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="instagram">
                                        <span class="fa fa-instagram"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div class="fb"></div>
                                </a>
                            </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <div class="secondnav " id="">
            <nav class="navbar secondnav container navbar-expand-md">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('delivery')}}">DELIVERY & PAYMENT</a>
                        </li>
                    
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                BUY
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">CATEGORIES</a>
                            <a class="dropdown-item" href="#">LISTINGS</a>
                            <a class="dropdown-item" href="#">CHECKOUT</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                SELL
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">CATEGORIES</a>
                            <a class="dropdown-item" href="#">SELLING FORM</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                TRADE
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">CATEGORIES</a>
                            <a class="dropdown-item" href="#">TRADING FORM</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                BORROW
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">CATEGORIES</a>
                            <a class="dropdown-item" href="#">LISTINGS</a>
                            <a class="dropdown-item" href="#">CHECKOUT</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                SERVICES
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">CATEGORIES</a>
                            <a class="dropdown-item" href="#">LISTINGS</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

      
        <main class="py-4">
            @yield('content')
        </main>

        <div class="footer">
            <div class="container text-center p-4">
                &copy; 2020 Copyright Game Trade. &nbsp;  All Rights Reserved
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  
    @stack('js')

    
</body>
</html>

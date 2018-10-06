<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

<header>

    <a class="navbar-brand" href="{{ url('/home') }}" style="font-size: 25px; color: white; position: absolute; top: 10px; left: 100px">
        {{ config('app.name', 'Laravel') }}
    </a>
    <ul class="navbar-nav ml-auto" style="float: right">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a style="color: white; position: absolute; right: 150px; top: 15px" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @else
            <li class="nav-item dropdown" style="position: absolute; top: 15px; right: 420px; color: white">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white">
                    <img src="http://images.kieranfs.co.uk/plus.png" style="width: 25px"> <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/bookings/create') }}">
                        {{ __('Add booking') }}
                    </a>

                    <a class="dropdown-item" href="{{ url('bookings/list') }}">
                        {{ __('Booking list') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

            <li class="nav-item dropdown" style="position: absolute; top: 15px; right: 250px; font-size: 15px">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white" >
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <a class="dropdown-item" href="">
                        {{ __('admin') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>



                </div>
            </li>
    @endguest
</header>
<main class="py-4">
    @yield('content')
</main>
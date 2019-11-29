<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="box">
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">

            <div class="navbar-menu">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{url('/')}}">
                        {{config('app.name')}}
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-end">
                    <a href="{{ route('forum.index') }}" class="navbar-item">Forum</a>
                    <a href="{{ route('chat.index') }}" class="navbar-item">Chat</a>
                    <a href="" class="navbar-item">Event</a>
                </div>

                @guest
                    <div class="navbar-end">
                        <div class="navbar-item">
                            @guest
                                <a class="navbar-item" href="{{ route('login') }}">Log in</a>
                                <a class="navbar-item" href="{{ route('register') }}">Sign up</a>
                                @else
                                    <a class="navbar-item" href="{{ route('logout') }}">Logout</a>
                            @endguest
                        </div>
                    </div>
                @endguest
            </div>

            <!-- Right Side Of Navbar -->
            {{--            <ul class="navbar-nav ml-auto">--}}
            {{--                <!-- Authentication Links -->--}}
            {{--                @guest--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
            {{--                    </li>--}}
            {{--                    @if (Route::has('register'))--}}
            {{--                        <li class="nav-item">--}}
            {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
            {{--                        </li>--}}
            {{--                    @endif--}}
            {{--                @else--}}

            {{--                @endguest--}}
            {{--            </ul>--}}

        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>
</body>

<script src="{{ mix('js/app.js') }}" defer></script>
</html>

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
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <header class="box">
        <div class="container">
            <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">

                <div class="navbar-menu">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{url('/')}}">
                            {{ config('app.name') }}
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
                        <a href="{{ route('events.index') }}" class="navbar-item">Event</a>
                    </div>

                    <div class="navbar-end">
                        <div class="navbar-item">
                            @guest
                            <a class="navbar-item" href="{{ route('login') }}">Log in</a>

                                @if(Route::has('register'))
                                    <a class="navbar-item" href="{{ route('register') }}">Sign up</a>
                                @endif

                            @else

                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    {{ auth()->user()->name}}
                                </a>

                                <div class="navbar-dropdown is-boxed">
                                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Preference</a>

                                    <hr class="navbar-divider">
                                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                </div>
                            </div>

                            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                                @csrf
                            </form>
                            @endguest
                        </div>
                    </div>

                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

<script src="{{ mix('js/app.js') }}" defer></script>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>
    <title>Piano Mino</title>
</head>
<body class="flex">
<header>
    <div>
        @if (Route::has('login'))
            <div class="flex navbar">
                <a href="{{ url('/home') }}">Piano Mino</a>
                <a href="{{ route('pianos') }}">Nos Pianos</a>
                @auth
                    <a href="{{ route('addPiano') }}">Ajouter un piano</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        Deconnexion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</header>
<main class="flex">
    @yield('content')
</main>
<footer class="flex">
    <h3>CECI EST UN FOOTER VRAIMENT TROP BEAU !!!!       </h3>
</footer>
</body>
</html>
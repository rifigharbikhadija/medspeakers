<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/main.js') }}" defer></script>
    <title>@yield('title', 'Mon Site')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <nav class="nav-style">
        <img class="logo" src="{{asset('images/logo.png')}}" alt="">
        <ul class="menu">
            <li class="menu-item"><a class="menu-item-link">Blog</a></li>
            <li class="menu-item"><a class="menu-item-link">About</a></li>
            <li class="menu-item"><a class="menu-item-link">Links</a></li>
            <li class="menu-item"><a class="menu-item-link">Projects</a></li>
        </ul>
        <img class="burger" src="{{asset('images/burger.png')}}" alt="">
    </nav>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endif
        </div>
        @endif
    </div>
    @yield('content')
    <footer>
        <img class="footer-logo" src="{{asset('images/white-logo.png')}}" alt="">
        <p class="footer-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. </p>
        <ul class="social-media">
            <li class="social-media-item"><a class="social-media-link">Twitter</a></li>
            <li class="social-media-item"><a class="social-media-link">Linkedin</a></li>
            <li class="social-media-item"><a class="social-media-link">RSS</a></li>
        </ul>
        <p class="copyright-text">&copy; 2012–2020 Nordic Rose Co.</p>
        <p class="copyright-text">All rights reserved.</p>
    </footer>
</body>
</html>
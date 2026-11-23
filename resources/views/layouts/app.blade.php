<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kidits Cafe')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @stack('styles')
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Kidits Cafe home">
                <img src="{{ asset('images/kidits-cafe-logo.svg') }}" alt="" width="220" height="72">
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">Menu</button>

            <nav id="site-nav" class="site-nav" aria-label="Main">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </nav>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <div>
                <strong>Kidits Cafe</strong>
                <p>Coffee, pastries, and a seat that's yours for the afternoon.</p>
            </div>
            <div>
                <strong>Come by</strong>
                <p>Rotonda, Ampayon, Butuan City</p>
                <p>Open daily, 7:00 a.m. to 9:00 p.m.</p>
            </div>
            <div>
                <strong>Group members</strong>
                <p>John Paul Quedit &middot; Jonard Sabsalon</p>
                <p>Third member: to be confirmed</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/layout.js') }}"></script>
    @stack('scripts')
</body>
</html>

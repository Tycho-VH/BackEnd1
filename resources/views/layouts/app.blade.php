<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snackbar De Smulhoek</title>


    <link rel="stylesheet" href="{{ asset('css/snackbar.css') }}">
</head>
<body>
<header class="site-header">
    <div class="logo">
        <img src="{{ asset('img.png') }}" alt="Snackbar Logo" height="80">
        <h1>Snackbar De Smulhoek</h1>
    </div>

    <nav class="nav-left">
        <a href="{{ route('menu.index') }}">🍔 Menu</a>
        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        @auth
            @if(auth()->user()->id === 1)
                <a href="{{ route('menu.create') }}">➕ Nieuw item</a>
            @endif
        @endauth
    </nav>

    <nav class="nav-right">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn small">🚪 Uitloggen</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn small">🔐 Inloggen</a>
        @endauth
    </nav>
</header>

<main class="site-content">
    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    @hasSection('content')
        @yield('content')
    @else
        <section class="welkom-container">
            <div class="welcome-message text-center">
                <h2 class="text-3xl font-bold mb-4">Welkom bij Snackbar De Smulhoek! 🍟</h2>
                <p class="text-lg mb-4">Zin in een lekkere snack? Je bent aan het juiste adres!</p>
                <p class="text-gray-700">Bekijk ons menu, plaats je bestelling of ontdek onze nieuwste specialiteiten.</p>

                <div class="mt-6">
                    <a href="{{ route('menu.index') }}" class="btn primary">Bekijk ons menu</a>
                </div>
            </div>
        </section>
    @endif
</main>

<footer class="site-footer">
    &copy; {{ date('Y') }} Snackbar De Smulhoek. Alle rechten voorbehouden.
</footer>
</body>
</html>

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
    <h1 class="title">🍟 Menu Overzicht</h1>
    @auth
        @if(auth()->user()->id === 1)
            <a href="{{ route('menu.create') }}" class="btn primary">➕ Nieuw menu-item toevoegen</a>
        @endif
    @endauth


    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <div class="menu-list">
        @foreach($MenuItems as $menu)
            <div class="menu-card">
                <div class="menu-info">
                    <h2>{{ $menu->naam }}</h2>
                    <p class="price">€ {{ number_format($menu->prijs, 2, ',', '.') }}</p>
                    <p class="description">{{ $menu->beschrijving }}</p>
                </div>

                {{-- Acties alleen zichtbaar voor admin --}}
                @auth
                    @if(auth()->user()->id === 1)
                        <div class="menu-actions">
                            <a href="{{ route('menu.show', $menu) }}" class="btn small">👁️ Bekijk</a>
                            <a href="{{ route('menu.edit', $menu) }}" class="btn small">✏️ Bewerk</a>
                            <form action="{{ route('menu.destroy', $menu) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn danger small">🗑️ Verwijder</button>
                            </form>
                        </div>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
    <footer class="site-footer">
        &copy; {{ date('Y') }} Snackbar De Smulhoek. Alle rechten voorbehouden.
    </footer>
    </body>
</html>


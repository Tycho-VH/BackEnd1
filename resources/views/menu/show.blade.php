<h1>👁️ Details van Menu-item</h1>

<p><strong>Naam:</strong> {{ $menu->naam }}</p>
<p><strong>Prijs:</strong> € {{ number_format($menu->prijs, 2, ',', '.') }}</p>
<p><strong>Beschrijving:</strong> {{ $menu->beschrijving }}</p>

@auth
    <a href="{{ route('menu.edit', $menu) }}">✏️ Bewerk</a>

    <form action="{{ route('menu.destroy', $menu) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">🗑️ Verwijder</button>
    </form>


@endauth

@guest
    <br><br>
    <a href="{{ route('dashboard') }}">← Terug naar menu-overzicht</a>
@endguest

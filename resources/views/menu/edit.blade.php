
    <h1>✏️ Bewerk Menu-item</h1>

    <form action="{{ route('menu.update', $menu) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="naam" value="{{ $menu->naam }}" required>
        <input type="text" name="prijs" value="{{ $menu->prijs }}" required>
        <input type="text" name="beschrijving" value="{{ $menu->beschrijving }}" required>

        <button type="submit">Bijwerken</button>
    </form>

    <a href="{{ route('menu.index') }}">← Terug naar overzicht</a>



    <div class="site-content">
        <h1>➕ Nieuw Menu-item</h1>

        <form action="{{ route('menu.store') }}" method="POST">
            @csrf

            <input type="text" name="naam" placeholder="Productnaam" required>
            <input type="text" name="prijs" placeholder="Prijs (bijv. 2.50)" required>
            <input type="text" name="beschrijving" placeholder="Beschrijving" required>

            <button type="submit">Toevoegen</button>
        </form>

        <a href="{{ route('dashboard') }}">← Terug naar overzicht</a>
    </div>


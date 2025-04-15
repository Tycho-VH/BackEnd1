
    <h1>Nieuw menu-item</h1>

    <form action="{{ route('menu.store') }}" method="POST">
        @csrf

        <input type="text" name="naam" placeholder="productnaam">
        <input type="text" name="prijs" placeholder="prijs">
        <input type="text" name="beschrijving" placeholder="beschrijving">

        <button type="submit">Toevoegen</button>
    </form>


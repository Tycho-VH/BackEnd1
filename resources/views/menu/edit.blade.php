<h1>Bewerk menu-item</h1>

<form action="{{ route('menu.update', $menu) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="naam" value="{{ $menu->naam }}">
    <input type="text" name="prijs" value=" {{ $menu->prijs }}">
    <input type="text" name="beschrijving" value="{{ $menu->beschrijving }}">
    <button type="submit">Bijwerken</button>
</form>

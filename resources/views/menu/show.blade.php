<h1>Details van menu-item</h1>

<p><strong>naam:</strong> {{ $menu->naam }}</p>

<a href="{{ route('menu.edit', $menu) }}">Bewerk</a>
<form action="{{ route('menu.destroy', $menu) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijder</button>
</form>

<br>
<a href="{{ route('menu.index') }}">Terug naar overzicht</a>


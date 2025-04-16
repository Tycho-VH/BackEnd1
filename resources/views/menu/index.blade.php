<h1>Menu overzicht</h1>
@auth
    @if(auth()->user()->id === 1)
<a href="{{ route('menu.create') }}">Nieuw menu-item toevoegen</a>
    @endif
@endauth
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<ul>
    @foreach($MenuItems as $menu)
        <li>
            {{ $menu->naam }} |
           € {{ $menu->prijs }} |
            {{ $menu->beschrijving }} |
          @auth
                @if(auth()->user()->id === 1)
            <a href="{{ route('menu.show', $menu) }}">Bekijk</a> |
            <a href="{{ route('menu.edit', $menu) }}">Bewerk</a> |
            <form action="{{ route('menu.destroy', $menu) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Verwijder</button>
                @endif
                @endauth
            </form>
        </li>
    @endforeach
</ul>



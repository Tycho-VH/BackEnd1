@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contactformulier</h1>

        @if(session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf

            <div>
                <label for="name">Naam:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name') <div style="color: red;">{{ $message }}</div> @enderror
            </div>

            <div>
                <label for="bericht">Bericht:</label>
                <textarea name="bericht">{{ old('bericht') }}</textarea>
                @error('bericht') <div style="color: red;">{{ $message }}</div> @enderror
            </div>

            <button type="submit">Verstuur</button>
        </form>
    </div>
@endsection

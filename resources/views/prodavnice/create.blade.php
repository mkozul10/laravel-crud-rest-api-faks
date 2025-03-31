@extends('layouts.app')

@section('content')
    <h1>Dodaj novu prodavnicu</h1>

    <form method="POST" action="{{ route('prodavnice.store') }}">
        @csrf
        <label>Naziv:</label>
        <input type="text" name="naziv" value="{{ old('naziv') }}">
        @error('naziv') <div>{{ $message }}</div> @enderror

        <label>Adresa:</label>
        <input type="text" name="adresa" value="{{ old('adresa') }}">
        @error('adresa') <div>{{ $message }}</div> @enderror

        <label>Grad:</label>
        <input type="text" name="grad" value="{{ old('grad') }}">
        @error('grad') <div>{{ $message }}</div> @enderror

        <label>Karta slika (URL):</label>
        <input type="text" name="karta_slika" value="{{ old('karta_slika') }}">

        <button type="submit">Spremi</button>
    </form>
@endsection

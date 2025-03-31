@extends('layouts.app')

@section('content')
    <h1>Uredi prodavnicu</h1>

    <form method="POST" action="{{ route('prodavnice.update', $prodavnica) }}">
        @csrf
        @method('PUT')

        <label>Naziv:</label>
        <input type="text" name="naziv" value="{{ old('naziv', $prodavnica->naziv) }}">
        @error('naziv') <div>{{ $message }}</div> @enderror

        <label>Adresa:</label>
        <input type="text" name="adresa" value="{{ old('adresa', $prodavnica->adresa) }}">
        @error('adresa') <div>{{ $message }}</div> @enderror

        <label>Grad:</label>
        <input type="text" name="grad" value="{{ old('grad', $prodavnica->grad) }}">
        @error('grad') <div>{{ $message }}</div> @enderror

        <label>Karta slika (URL):</label>
        <input type="text" name="karta_slika" value="{{ old('karta_slika', $prodavnica->karta_slika) }}">

        <button type="submit">Ažuriraj</button>
    </form>
@endsection

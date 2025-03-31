@extends('layouts.app')

@section('content')
    <h1>{{ $prodavnica->naziv }}</h1>

    <p><strong>Adresa:</strong> {{ $prodavnica->adresa }}</p>
    <p><strong>Grad:</strong> {{ $prodavnica->grad }}</p>

    @if($prodavnica->karta_slika)
        <img src="{{ $prodavnica->karta_slika }}" width="400" alt="Karta">
    @endif

    <p>
        <a href="{{ route('prodavnice.edit', $prodavnica) }}">Uredi</a> |
        <a href="{{ route('prodavnice.index') }}">Natrag</a>
    </p>
@endsection

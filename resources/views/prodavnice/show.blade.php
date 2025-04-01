@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg p-4 border-info">
        <h1 class="text-info mb-4">{{ $prodavnica->naziv }}</h1>
        <p class="text-secondary"><strong>Adresa:</strong> {{ $prodavnica->adresa }}</p>
        <p class="text-secondary"><strong>Grad:</strong> {{ $prodavnica->grad }}</p>
        @if($prodavnica->karta_slika)
            <div class="mb-3">
                <img src="{{ $prodavnica->karta_slika }}" class="img-fluid rounded shadow-sm" style="max-width: 400px;" alt="Karta">
            </div>
        @endif
        <div class="d-flex flex-wrap gap-3 mt-3">
            <a href="{{ route('prodavnice.edit', $prodavnica) }}" class="btn btn-outline-warning">Uredi</a>
            <a href="{{ route('prodavnice.index') }}" class="btn btn-outline-secondary">Natrag</a>
        </div>
    </div>
</div>
@endsection
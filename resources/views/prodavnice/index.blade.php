@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-success">List</h1>
        <a href="{{ route('prodavnice.create') }}" class="btn btn-outline-success shadow-sm">New item</a>
    </div>
    @if(session('success'))
        <div class="alert alert-success shadow-sm">{{ session('success') }}</div>
    @endif
    @forelse($prodavnice as $prodavnica)
        <div class="card mb-4 border-0 shadow rounded bg-light">
            <div class="card-body">
                <h4 class="card-title text-dark-emphasis mb-3">
                    <span class="text-success">{{ $prodavnica->naziv }}</span>
                </h4>
                <p class="card-text text-muted">
                    <strong>Adresa:</strong> {{ $prodavnica->adresa }}<br>
                    <strong>Grad:</strong> {{ $prodavnica->grad }}
                </p>
                @if($prodavnica->karta_slika)
                    <img src="{{ $prodavnica->karta_slika }}" class="img-thumbnail rounded mb-3" style="max-width: 300px;" alt="Karta">
                @endif
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <a href="{{ route('prodavnice.show', $prodavnica) }}" class="btn btn-outline-success btn-sm">Prikaži</a>
                    <a href="{{ route('prodavnice.edit', $prodavnica) }}" class="btn btn-outline-warning btn-sm">Uredi</a>
                    <form action="{{ route('prodavnice.destroy', $prodavnica) }}" method="POST" onsubmit="return confirm('Jesi siguran?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Obriši</button>
                    </form>
                </div>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Trenutno nema prodavnica za prikaz.</div>
    @endforelse
</div>
@endsection
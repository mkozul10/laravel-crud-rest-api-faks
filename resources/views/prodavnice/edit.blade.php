@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-success mb-4">Edit item</h1>
    <div class="card shadow-lg p-4 border-warning">
        <form method="POST" action="{{ route('prodavnice.update', $prodavnica) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Naziv:</label>
                <input type="text" name="naziv" class="form-control border-warning" value="{{ old('naziv', $prodavnica->naziv) }}">
                @error('naziv') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Adresa:</label>
                <input type="text" name="adresa" class="form-control border-warning" value="{{ old('adresa', $prodavnica->adresa) }}">
                @error('adresa') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Grad:</label>
                <input type="text" name="grad" class="form-control border-warning" value="{{ old('grad', $prodavnica->grad) }}">
                @error('grad') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Karta slika (URL):</label>
                <input type="text" name="karta_slika" class="form-control border-warning" value="{{ old('karta_slika', $prodavnica->karta_slika) }}">
            </div>
            <button type="submit" class="btn btn-outline-warning">Ažuriraj</button>
        </form>
    </div>
</div>
@endsection
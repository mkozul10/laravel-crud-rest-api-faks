@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-success mb-4">Add item</h1>
    <div class="card shadow-lg p-4 border-success">
        <form method="POST" action="{{ route('prodavnice.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Naziv:</label>
                <input type="text" name="naziv" class="form-control border-success" value="{{ old('naziv') }}">
                @error('naziv') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Adresa:</label>
                <input type="text" name="adresa" class="form-control border-success" value="{{ old('adresa') }}">
                @error('adresa') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Grad:</label>
                <input type="text" name="grad" class="form-control border-success" value="{{ old('grad') }}">
                @error('grad') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-secondary">Karta slika (URL):</label>
                <input type="text" name="karta_slika" class="form-control border-success" value="{{ old('karta_slika') }}">
            </div>
            <button type="submit" class="btn btn-outline-success">Spremi</button>
        </form>
    </div>
</div>
@endsection
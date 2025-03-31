<?php

namespace App\Http\Controllers;

use App\Models\Prodavnica;
use Illuminate\Http\Request;

class ProdavnicaController extends Controller
{
    // Show all prodavnice in a view
    public function index()
    {
        $prodavnice = Prodavnica::all();
        return view('prodavnice.index', compact('prodavnice'));
    }

    // Show form to create a new prodavnica
    public function create()
    {
        return view('prodavnice.create');
    }

    // Store a new prodavnica
    public function store(Request $request)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'adresa' => 'required|string|max:255',
            'grad' => 'required|string|max:255',
            'karta_slika' => 'nullable|string|max:255',
        ]);

        Prodavnica::create($validated);
        return redirect()->route('prodavnice.index')->with('success', 'Prodavnica dodana!');
    }

    // Show details of a single prodavnica
    public function show(Prodavnica $prodavnica)
    {
        return view('prodavnice.show', compact('prodavnica'));
    }

    // Show form to edit an existing prodavnica
    public function edit(Prodavnica $prodavnica)
    {
        return view('prodavnice.edit', compact('prodavnica'));
    }

    // Update an existing prodavnica
    public function update(Request $request, Prodavnica $prodavnica)
    {
        $validated = $request->validate([
            'naziv' => 'required|string|max:255',
            'adresa' => 'required|string|max:255',
            'grad' => 'required|string|max:255',
            'karta_slika' => 'nullable|string|max:255',
        ]);

        $prodavnica->update($validated);
        return redirect()->route('prodavnice.index')->with('success', 'Prodavnica ažurirana!');
    }

    // Delete a prodavnica
    public function destroy(Prodavnica $prodavnica)
    {
        $prodavnica->delete();
        return redirect()->route('prodavnice.index')->with('success', 'Prodavnica obrisana!');
    }
}

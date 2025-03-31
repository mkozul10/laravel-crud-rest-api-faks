<?php

use App\Http\Controllers\ProdavnicaController;

Route::redirect('/', '/prodavnice');
Route::resource('prodavnice', ProdavnicaController::class)->parameters([
    'prodavnice' => 'prodavnica',
]);

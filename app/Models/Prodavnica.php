<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodavnica extends Model
{
    protected $table = 'prodavnice';
    protected $fillable = ['naziv', 'adresa', 'grad', 'karta_slika'];
}

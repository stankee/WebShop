<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    // Naziv tablice u bazi podataka
    protected $table = 'countries';

    // Definiranje primarnog ključa
    protected $primaryKey = 'code';

    // Onemogućavanje automatskog dodavanja "created_at" i "updated_at" vremenskih oznaka
    public $timestamps = false;

    // Definiranje JSONB polja
    protected $casts = [
        'states' => 'json',
    ];

    // Ostala logika vašeg modela (npr. dodatne metode)
}

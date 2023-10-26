<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    // Naziv tablice u bazi podataka
    protected $table = 'payments';

    // Definiranje primarnog ključa
    protected $primaryKey = 'id';

    // Omogući automatsko popunjavanje vremenskih oznaka (created_at i updated_at)
    public $timestamps = true;

    // Definirajte popis polja koja su dopuštena za masovno dodjeljivanje
    protected $fillable = [
        'order_id',
        'amount',
        'status',
        'type',
        'created_by',
        'updated_by',
    ];

    // Ostala logika vašeg modela (npr. definiranje veza s drugim modelima)
}

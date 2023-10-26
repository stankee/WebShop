<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddresses extends Model
{
    use HasFactory;

    // Naziv tablice u bazi podataka
    protected $table = 'customer_addresses';

    // Definiranje primarnog ključa
    protected $primaryKey = 'id';

    // Omogući automatsko popunjavanje vremenskih oznaka (created_at i updated_at)
    public $timestamps = true;

    // Definirajte popis polja koja su dopuštena za masovno dodjeljivanje
    protected $fillable = [
        'type',
        'address1',
        'address2',
        'city',
        'state',
        'zipcode',
        'country_code',
        'customer_id',
    ];

    // Ostala logika vašeg modela (npr. definiranje veza s drugim modelima)
}

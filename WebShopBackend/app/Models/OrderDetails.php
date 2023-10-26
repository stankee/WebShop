<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    // Naziv tablice u bazi podataka
    protected $table = 'order_details';

    // Definiranje primarnog ključa
    protected $primaryKey = 'id';

    // Omogući automatsko popunjavanje vremenskih oznaka (created_at i updated_at)
    public $timestamps = true;

    // Definirajte popis polja koja su dopuštena za masovno dodjeljivanje
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address1',
        'address2',
        'city',
        'state',
        'zipcode',
        'country_code',
    ];

    // Ostala logika vašeg modela (npr. definiranje veza s drugim modelima)
}

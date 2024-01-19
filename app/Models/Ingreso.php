<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'cliente',
        'carro',
        'banco',
        'nro_ope',
        'monto',
        'descripcion'
    ];
}

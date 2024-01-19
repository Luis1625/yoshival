<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'modelo',
        'placa',
        'color',
        'marca',
        'vim',
        'motor',
        'duenio',
        'flota',
        'seguro',
        'observacion'
    ];
}

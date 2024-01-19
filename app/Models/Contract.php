<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'carro',
        'cliente',
        'cuotas',
        'fec_ini',
        'monto',
        'monto_cuota'
    ];
}

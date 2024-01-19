<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutCarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "modelo" => "required",
            "placa" => ["required","unique:cars,placa,".$this->route("car")->id],
            "color" => "required",
            "marca" => "required",
            "vim" => ["required","unique:cars,vim,".$this->route("car")->id],
            "motor" => "required",
            "duenio" => "required",
            "flota" => "required",
            "seguro" => "required",
            "observacion" => "required"
        ];
    }
}

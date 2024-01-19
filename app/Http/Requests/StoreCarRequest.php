<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    static public function myRules(){
        return [
            "modelo" => "required",
            "placa" => ["required","unique:cars"],
            "color" => "required",
            "marca" => "required",
            "vim" => ["required","unique:cars"],
            "motor" => "required",
            "duenio" => "required",
            "flota" => "required",
            "seguro" => "required",
            "observacion" => "required"
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return $this->myRules();
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutCustomerRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nombres" => "required",
            "ape_pat" => "required",
            "ape_mat" => "required",
            "doi" => ["required","min:8","numeric","unique:customers,doi,".$this->route("customer")->id],
            "direc" => "required",
        ];
    }
}

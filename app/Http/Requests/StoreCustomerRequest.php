<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
{
    
    static public function myRules(){
        return [
            "nombres" => "required",
            "ape_pat" => "required",
            "ape_mat" => "required",
            "doi" => ["required","numeric","min:8","unique:customers"],
            "direc" => "required"
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

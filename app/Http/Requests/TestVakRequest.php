<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TestVakRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
        public function rules():array{
            $reglas = [];
            for ($i = 1; $i <= 40; $i++){
                $reglas['pregunta'. $i] = 'required|in:A,B,C';

            }

        return $reglas;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class PrecioStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "valor_parqueo_hora" => "required|numeric|min:4",
            "valor_total" => "required|numeric|min:4",,
            ];
    }

    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json($validator->errors(),
    422));
    }
}


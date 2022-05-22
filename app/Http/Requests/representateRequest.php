<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class representateRequest extends FormRequest
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
            "nombre" => "required |  max:24 | min:2",
            "nif" => "required | unique:representantes,nif",
            "telefono" => "required | digits:9| numeric ",
            "correo" => "required | email",
            "cargo" => "required |  max:24 | min:2",
        ];
    }
}

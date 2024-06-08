<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            //Define the validation rules for the request
            'nombre' => 'required|string|max:255|min:3',
            'apellido'=> 'required|string|max:255|min:3',
            'edad'=> 'required|string|min:2',
            'dni'=> 'required|string|min:8|max:8',
            'estadocivil'=> 'required|string',
        ];
    }
}

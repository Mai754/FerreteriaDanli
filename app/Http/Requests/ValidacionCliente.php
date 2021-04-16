<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCliente extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_cliente' => 'required|max:15',
            'apellido_cliente' => 'required|max:15',
            'numero_de_telefono' => 'required|max:8|min:8|unique:cliente,numero_de_telefono,'. $this->route('id'),
        ];
    }
}

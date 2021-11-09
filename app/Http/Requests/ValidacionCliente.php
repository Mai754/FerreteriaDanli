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
            'identidad' => 'required|min:13|max:13|unique:clientes,identidad,'. $this->route('id'),
            'nombre' => 'required||alpha|max:15',
            'apellido' => 'required||alpha|max:15',
            'telefono' => 'required|max:8|min:8|unique:clientes,telefono,'. $this->route('id'),
            'direccion' => 'required|max:200',
        ];
    }
}

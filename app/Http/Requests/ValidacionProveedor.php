<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProveedor extends FormRequest
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
            'DNI' => 'required|max:13|min:13|unique:proveedores,DNI,' . $this->route('id'),
            'nombre_encargado' => 'required|max:15',
            'apellido_encargado' => 'required|max:15',
            'nombre_empresa' => 'required|max:15',
            'dirección_empresa' => 'required|max:100',
            'numero_encargado' => 'required|max:8|min:8|unique:proveedores,numero_encargado,'. $this->route('id'),
            'numero_empresa' => 'required|max:8|min:8|unique:proveedores,numero_empresa,'. $this->route('id'),
        ];
    }
}

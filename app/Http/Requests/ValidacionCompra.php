<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCompra extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo_factura' => 'required|max:8|min:8|unique:factura_compra,codigo_factura,'. $this->route('id'),
            'empleado_id' => 'required',
            'proveedor_id' => 'required',
        ];
    }
}

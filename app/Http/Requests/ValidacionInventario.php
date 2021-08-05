<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionInventario extends FormRequest
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
            'codigo_producto' => 'required|max:6|min:6|unique:inventarios,codigo_producto,' . $this->route('id'),
            'nombre_producto' => 'required|max:100',
            'precio_compra' => 'required|min:1',
            'precio_venta' => 'required|min:1',
            'cantidad' => 'required|min:0',
            'descripcion' => 'required|max:3000',
            'marca' => 'required|max:100',
        ];
    }
}

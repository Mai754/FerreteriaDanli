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
            'codigo_producto' => 'required|max:6|min:6|unique:inventario,codigo_producto,' . $this->route('id'),
            'Nombre_del_producto' => 'required|max:100',
            'descripcion_del_producto' => 'required|max:3000',
            'marcar_del_producto' => 'required|max:100',
        ];
    }
}

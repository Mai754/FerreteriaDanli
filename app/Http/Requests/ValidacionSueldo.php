<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionSueldo extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'Sueldo' => 'required',
            'departamento_id' => 'required',
            'empleado_id' => 'required',
            //'empleado_id' => 'required|unique:sueldo_empleado,empleado_id,' . $this->route('id'),
            'tipo_id' => 'required'
        ];
    }
}

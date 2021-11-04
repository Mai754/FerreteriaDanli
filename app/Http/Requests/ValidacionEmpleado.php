<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionEmpleado extends FormRequest
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
            'DNI_empleado' => 'required|max:13|min:13|unique:empleado,DNI_empleado,' . $this->route('id'),
            'primer_nombre' => 'required|max:15',
            'segundo_nombre' => 'required|max:15',
            'primer_apellido' => 'required|max:15',
            'segundo_apellido' => 'required|max:15',
            'fecha_ingreso' => 'required',
            'fecha_de_nacimiento' => 'required',
            'telefono' => 'required|max:8|min:8|unique:empleado,contacto_de_emergencia,'. $this->route('id'),
            'contacto_de_emergencia' => 'required|max:8|min:8|unique:empleado,contacto_de_emergencia,'. $this->route('id'),
        ];;
    }
}

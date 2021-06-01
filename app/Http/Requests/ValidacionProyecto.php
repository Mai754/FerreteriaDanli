<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionProyecto extends FormRequest
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
            'nombre_del_proyecto'=>'required|max:20',
            'descripcion'=>'required|max:20',
            'estado_id'=>'required|integer',
            'empleado_id'=>'required|integer',
            'cliente_id'=>'required|integer',
            'presupuesto'=>'required|numeric',
            'cantidad_gastada'=>'required|numeric',
            'duracion_del_proyecto'=>'required|numeric',
        ];
    }
}

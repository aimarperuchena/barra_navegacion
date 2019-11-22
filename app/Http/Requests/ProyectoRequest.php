<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'nombre'=>'required',
            'titulo'=>'required',
            'fechainicio'=>'required',
            'fechafin'=>'required',
            'horasestimadas'=>'required|min:0',
            'empleado'=>'required'
        ];
    }

    public function messages(){
        return $messages=[
            'nombre.required'=>'Nombre requerido',
            'titulo.required'=>'Titulo requerido',
            'fechainicio.required'=>'Fecha inicio requerido',
            'fechafin.required'=>'Fecha fin requerido',
            'horasestimadas.required'=>'Horas estimadas requerido',
            'empleado.required'=>'Empleado requerido'
        ];
    }
}

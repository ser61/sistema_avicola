<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'nit'=>'max:250',
            'nombre'=>'max:250',
            'apellido'=>'max:250',
            'direccion'=>'max:250',
            'email'=>'max:250',
            'empresa'=>'max:250',
            'tipo'=>'max:250',
        ];
    }
}

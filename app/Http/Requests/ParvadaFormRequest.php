<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParvadaFormRequest extends FormRequest
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
            'cantidadpollos'=>'max:100',
            'sexo'=>'max:200',
            'edad'=>'max:200',
            'pesopromedio'=>'max:200',
            'caracteristica'=>'max:200',
            'productividad'=>'max:200',
            'tipo'=>'max:200',
            'mortalidad'=>'max:200',

        ];
    }
}

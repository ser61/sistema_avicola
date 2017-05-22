<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdenProduccionFormRequest extends FormRequest
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
            'observacion'=>'max:200',
            'idempleado'=>'max:200',
            
            'idalimento'=>'max:200',
            'peso'=>'max:200',
        ];
    }
}

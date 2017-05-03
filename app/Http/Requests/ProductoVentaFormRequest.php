<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoVentaFormRequest extends FormRequest
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
            'nombre'=>'max:250',
            'edad'=>'max:250',
            'sexo'=>'max:250',
            'pesopromedio'=>'max:250',
            'productividad'=>'max:250',
            'caractaresticas'=>'max:250',
            'tipo'=>'max:250',
            'idcalidad'=>'max:250',
            'idtipo'=>'max:250',
            'idgranja'=>'max:250',
        ];
    }
}

<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nit' => 'digits_between:5,10',
          'nombre' => 'required|max:100',
          'fecha' => 'required|date',
          'monto' => 'required',
          'idCliente' => 'required'
        ];
    }
}

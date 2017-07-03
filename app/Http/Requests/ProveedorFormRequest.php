<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorFormRequest extends FormRequest
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
        'ci' => 'required|digits_between:5,10',
        'nombre'=>'required|max:100',
        'apellido' => 'required|max:100',
        'direccion' => 'required|max:200',
        'email' => 'required|email',
        'nombreEmpresa' => 'required|max:100',
      ];
    }
}

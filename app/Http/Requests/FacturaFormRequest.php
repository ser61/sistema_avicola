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
      'nit' => 'digits_between:5,10',
      'nombre' => 'max:100',
      'montoTotal' => 'max:100',
      'fecha' => 'max:100',
      'idCliente' => 'max:100'
    ];
  }
}

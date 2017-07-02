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
      'nit' => 'max:100',
      'nombre' => 'max:100',
      'montoTotal' => 'max:100',
      'fecha' => 'max:100',
      'idEmpleado' => 'max:100',
      'idCliente' => 'max:100',

      'fecha_a' => 'max:100',
      'estado' => 'max:100',
      'fecha_b' => 'max:100'
    ];
  }
}

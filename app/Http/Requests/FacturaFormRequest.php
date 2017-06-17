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
      'nit' => 'required|max:100',
      'nombre' => 'required|max:100',
      'montoTotal' => 'required|max:100',
      'fecha' => 'max:100',
      'idEmpleado' => 'required|max:100',
      'idCliente' => 'required|max:100'
    ];
  }
}

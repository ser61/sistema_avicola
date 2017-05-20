<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
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
      'nombre'=>'required|max:250',
      'descripcion'=>'required',
      'pesoIntervaloSuperior'=>'required',
      'pesoIntervaloInferior'=>'required',
    ];
  }
}

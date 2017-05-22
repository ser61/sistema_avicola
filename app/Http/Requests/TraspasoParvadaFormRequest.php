<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TraspasoParvadaFormRequest extends FormRequest
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
            'fecha'=>'max:250',
            'cantidad'=>'max:250',
            'idgalpon'=>'max:250',
            'idparvada'=>'max:250',
            'idetapa'=>'max:250',
        ];
    }
}

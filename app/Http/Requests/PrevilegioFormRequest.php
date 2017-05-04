<?php

namespace sisAvicola\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrevilegioFormRequest extends FormRequest
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
            $table->string('nombre');
            $table->int('edad')->nullable();
            $table->char('sexo',1)->nullable();
            $table->int('pesoPromedio')->nullable();
            $table->int('productividad')->nullable();
            $table->string('caractaresticas')->nullable();
            $table->char('visible')->nullable();
            $table->char('tipo',1);
            $table->int('idCalidad');
            $table->int('idTipo');
            $table->int('idGranja'); 
        ];
    }
}

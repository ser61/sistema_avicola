<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $table ='Calidad';

    protected $primaryKey = 'id';

    //public $timestamps=false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'pesoIntervaloSuperior',
        'pesoIntervaloInferior',
        'visible'
    ];

    protected $hidden = [

    ];
}

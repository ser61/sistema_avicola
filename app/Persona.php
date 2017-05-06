<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table ='Persona';

    protected $primaryKey = 'id';

    //public $timestamps=false;

    protected $fillable = [
        'nit',
        'nombre',
        'apellido',
        'direccion',
        'email',
        'empresa',
        'tipo',
        'visible'
    ];

    protected $hidden = [

    ];
}

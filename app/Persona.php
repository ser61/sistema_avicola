<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table ='Persona';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'nit/ci',
        'nombre',
        'apellido',
        'direccion',
        'email',
        'empresa',
        'fechaIngreso',
        'fechaSalida',
        'tipo',
        'visible'
    ];

    protected $hidden = [

    ];
}

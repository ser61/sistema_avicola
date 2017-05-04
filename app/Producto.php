<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table ='Producto';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
        'pesoPromedio',
        'productividad',
        'caractaresticas',
        'visible',
        'idCalidad',
        'idTipo',
        'idGranja'
    ];

    protected $hidden = [

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table ='Factura';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'nit',
        'nombre',
        'fecha',
        'monto',
        'visible'
    ];

    protected $hidden = [

    ];
}

<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Granja extends Model
{
    protected $table ='Granja';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'ubicacion',
        'tipo',
        'visible'
    ];

    protected $hidden = [

    ];
}

<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table ='tipo';

    protected $primaryKey = 'id';

    //public $timestamps=false;

    protected $fillable = [
        'nombre',
        'visible'
    ];

    protected $hidden = [

    ];
}

<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table ='Cargo';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'visible'
    ];

    protected $hidden = [

    ];
}

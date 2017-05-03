<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table ='Telefono';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'numero',
        'idPersona',
        'visible'
    ];

    protected $hidden = [

    ];
}

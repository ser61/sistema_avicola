<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    protected $table ='Privilegio';

    protected $primaryKey = 'id';

    public $timestamps=false;

    protected $fillable = [
        'privilegio',
        'visible'
    ];

    protected $hidden = [

    ];
}

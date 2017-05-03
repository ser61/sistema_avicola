<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'descripcion'
    ];

    protected $hidden = [

    ];
}

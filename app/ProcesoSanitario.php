<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class ProcesoSanitario extends Model
{
    protected $table = 'proceso_sanitario';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'idEmpresa',
        'visible'
    ];
}

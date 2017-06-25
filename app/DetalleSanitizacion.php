<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class DetalleSanitizacion extends Model
{
    protected $table = 'detalle_sanitizacion';

    protected  $primaryKey = 'id';

    protected $fillable = ['idProcesoSanitario','idRegistroSanitizacion','idEmpresa','visible'];
}

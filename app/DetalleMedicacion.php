<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class DetalleMedicacion extends Model
{
    protected $table = 'detalle_medicacion';

    protected  $primaryKey = 'id';

    protected $fillable = [
        'idMedicamento',
        'idReporteMedicacion',
        'dosis',
        'viaDeAplicacion',
        'idEmpresa',
        'visible'];
}

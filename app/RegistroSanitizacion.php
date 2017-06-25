<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class RegistroSanitizacion extends Model
{
    protected $table = 'registro_sanitizacion';

    protected $primaryKey = 'id';

    protected $fillable = ['fecha','idInfraestructura','idEmpresa','visible'];
}

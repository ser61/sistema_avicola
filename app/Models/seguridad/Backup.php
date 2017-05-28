<?php

namespace sisAvicola\Models\seguridad;

use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
  protected $table = 'backup';

  protected $fillable = ['nombre', 'fecha', 'path', 'idEmpresa', 'visible'];

  public $timestamps = false;

  public function scope_getBackups($query, $idEmpresa)
  {
    $backups = $query->where('idEmpresa', $idEmpresa)->whereVisible('1');
    return $backups;
  }

  public function scope_eliminar($query, $id)
  {
    $query->whereId($id)->update(['visible' => '0']);
    $backup = $this->find($id);
    return $backup;
  }
}

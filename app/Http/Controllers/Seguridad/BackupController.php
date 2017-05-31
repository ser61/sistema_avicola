<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Mockery\CountValidator\Exception;
use sisAvicola\Http\Controllers\Controller;
use Alert;
use Artisan;
use sisAvicola\Http\Requests\BackupRequest;
use sisAvicola\Models\seguridad\Backup;
use Storage;
use Symfony\Component\Process\Process;

class BackupController extends Controller
{
  public function index()
  {
    $backups = Backup::_getBackups(Auth::user()->idEmpresa)->get();
    return view('seguridad.backup.backups', compact('backups'));
  }

  public function create(BackupRequest $request)
  {
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['visible'] = '1';
    $request['fecha'] = Carbon::now('America/La_Paz');
    //try {
      //ini_set('max_execution_time', 300);
      Artisan::call('backup:mysql-dump',[ 'filename' => $request['nombre']]);
      Backup::create($request->all());
      return back()->with('msj','Se creo una copia exitosamente.');
    /*} catch (Exception $e) {
      return redirect()->back()->with('error','Hubo un problema.');
    }*/
  }

  public function download(Backup $backup)
  {
    //$file = Storage::disk('backups')->getDriver()->getAdapter()->getPathPrefix();
    $file = storage_path('backups\\'.$backup['nombre'].'.sql');
    return response()->download($file);
  }

  public function delete(Backup $backup)
  {
    $disk = Storage::disk('backups');
    if ($disk->exists($backup['nombre'] . '.sql')) {
      //$disk->delete($backup['nombre'] . '.sql');
      Backup::_eliminar($backup['id']);
      return back()->with('msj', 'El BackUp fue eliminado exitosamente.');
    }else{
      return back()->with('error', 'El BackUp ya no existe en la memoria.');
    }
  }

  public function restore(Backup $backup)
  {
      ini_set('max_execution_time', 300);
      $process = new Process('cd ' . base_path() .
        ' && php artisan backup:mysql-restore --filename=cuarto.sql -y');
      $process->run();
      return back()->with('msj', 'El BackUp se restauro exitosamente.');
    /*} catch (Exception $e) {
      return back()->with('error', 'Hubo un problema en la restauración');
    }*/
  }
}

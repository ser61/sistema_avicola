<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use sisAvicola\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Artisan;
use sisAvicola\Http\Requests\BackupRequest;
use sisAvicola\Models\seguridad\Backup;
use Storage;

class BackupController extends Controller
{
  public function index()
  {
    $backups = Backup::all();
    return view('seguridad.backup.backups', compact('backups'));
  }

  public function create(BackupRequest $request)
  {
    $request['idEmpresa'] = Auth::user()->idEmpresa;
    $request['visible'] = '1';
    $request['fecha'] = Carbon::now();
    //try {
      //ini_set('max_execution_time', 300);
      Artisan::call('backup:mysql-dump',[ 'filename' => $request['nombre']]);
      Backup::create($request->all());
      return back()->with('msj','Se creo una copia exitosamente.');
    /*} catch (Exception $e) {
      return redirect()->back()->with('error','Hubo un problema.');
    }*/
  }

  public function download()
  {
    $file_name = Request::input('file_name');

    $file = config('laravel-backup.backup.name') . '/' . $file_name;
    $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
    if ($disk->exists($file)) {
      $fs = Storage::disk(config('laravel-backup.backup.destination.disks')[0])->getDriver();
      $stream = $fs->readStream($file);
      return \Response::stream(function () use ($stream) {
        fpassthru($stream);
      }, 200, [
        "Content-Type" => $fs->getMimetype($file),
        "Content-Length" => $fs->getSize($file),
        "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
      ]);
    } else {
      abort(404, "The backup file doesn't exist.");
    }
  }
  /**
   * Deletes a backup file.
   */
  public function delete($file_name)
  {
    $disk = Storage::disk(config('laravel-backup.backup.destination.disks')[0]);
    if ($disk->exists(config('laravel-backup.backup.name') . '/' . $file_name)) {
      $disk->delete(config('laravel-backup.backup.name') . '/' . $file_name);
      return redirect()->back();
    } else {
      abort(404, "The backup file doesn't exist.");
    }
  }
}

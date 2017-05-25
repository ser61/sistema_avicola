<?php

namespace sisAvicola\Http\Controllers\Seguridad;

use sisAvicola\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use Artisan;
use Storage;

class BackupController extends Controller
{
  public function index()
  {
    if (!count(config('laravel-backup.backup.destination.disks'))) {
      dd(trans('backpack::backup.no_disks_configured'));
    }

    $this->data['backups'] = [];

    foreach (config('laravel-backup.backup.destination.disks') as $disk_name) {
      $disk = Storage::disk($disk_name);
      $files = $disk->allFiles();

      // make an array of backup files, with their filesize and creation date
      foreach ($files as $k => $f) {
        // only take the zip files into account
        if (substr($f, -4) == '.zip' && $disk->exists($f)) {
          $this->data['backups'][] = [
            'file_path'     => $f,
            'file_name'     => str_replace('backups/', '', $f),
            'file_size'     => $disk->size($f),
            'last_modified' => $disk->lastModified($f),
            'disk'          => $disk_name,
            'download'      => true,
          ];
        }
      }
    }

    // reverse the backups, so the newest one would be on top
    $this->data['backups'] = array_reverse($this->data['backups']);
    $this->data['title'] = 'Backups';

    return view('seguridad.backups', $this->data);
  }

  public function create()
  {
    try {
      ini_set('max_execution_time', 300);
      Artisan::call('backup:run');
      return redirect()->back()->with('msj','Se creo una copia exitosamente.');
    } catch (Exception $e) {
      return redirect()->back()->with('error','Hubo un problema.');
    }
  }
  /**
   * Downloads a backup zip file.
   *
   * TODO: make it work no matter the flysystem driver (S3 Bucket, etc).
   */
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

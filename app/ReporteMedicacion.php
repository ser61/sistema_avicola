<?php

namespace sisAvicola;

use Illuminate\Database\Eloquent\Model;

class ReporteMedicacion extends Model
{
    protected $table = 'reporte_medicacion';

    protected  $primaryKey = 'id';

    protected $fillable = [
        'fechaMedicacion',
        'idEmpleado',
        'idParvada',
        'idLoteHuevoIncubable',
        'idEmpresa',
        'visible'];

    public function scope_getReporteMedicacion($query, $searchText){
        $reportes =$query
            ->join('lote_huevo_incubable as d','d.id','=','reporte_medicacion.idLoteHuevoIncubable')
            ->join('persona as pe','pe.id','=','reporte_medicacion.idEmpleado')
            ->join('parvada as p','p.id','=','reporte_medicacion.idParvada')
            ->select('reporte_medicacion.id as idReporte','reporte_medicacion.fechaMedicacion',
                'reporte_diario.idParvada as idParvada','p.cantidadPollos','p.sexo','p.edad','p.pesoPromedio',
                'p.tipo','p.mortalidad','reporte_diario.idEmpleado','pe.nombre','pe.apellido',
                'reporte_diario.visible')
            ->where('reporte_medicacion.id','LIKE','%'.$searchText.'%')
            ->where('reporte_medicacion.visible','LIKE','1')
            ->orderBy('reporte_medicacion.idParvada','desc');
        return $reportes;
    }

}

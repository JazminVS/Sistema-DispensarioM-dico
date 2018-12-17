<?php

namespace App\Http\Controllers\asistente;

use App\Modelos\Farmacia;
use App\Modelos\Medicamento;
use App\Modelos\Sucursal;
use App\Modelos\TipoMedicamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FarmaciaController extends Controller
{
    //Inicio
    public function index()
    {
        $tipo_medicamento=TipoMedicamento::all();
        return view ('asistente.farmacia.crearmedicamento',compact('tipo_medicamento'));
    }
    //BOTIQUINES EN SUCURSALES

    public function listamedicamentos(Request $request)
    {
        $tipo_medicamento=TipoMedicamento::all();
        //$medicamentos=Medicamento::all();
        if($request){
            $query=trim($request->get('searchText'));
            $medicamentos=DB::table('farmacia')->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('nombre')
                ->paginate(5);
        }
        return view ('asistente.farmacia.listamedicamentos',compact('medicamentos','tipo_medicamento'));
    }
    public function ingresar(Request $request)
    {
        $fecha = $request->input('fecha');
        $nombre = $request->input('nombre');
        $tipo = $request->get('tipo');
        $concentracion = $request->input('concentracion');
        $cantidad = $request->input('cantidad');

        $date = date_create($fecha);
        $fecha_ingreso = date_format($date, 'Y-m-d'); //fecha actual para ingresar a base

        DB::table('farmacia')->insert(
            [
                'codigo'=>null,
                'nombre'=>$nombre,
                'concentracion'=>$concentracion,
                'cantidad'=>$cantidad,
                'estado'=>1,
                'fecha_ingreso'=>$fecha_ingreso,
                'fecha_reposicion'=>null,
                'fk_tipo_medicamento'=>$tipo,
            ]
        );
        echo "datos ingresados correctamente";
    }
    public function vermedicamento($id)
    {
        $medicamento=Medicamento::whereId($id)->firstOrFail();
        $sucursales=Sucursal::all();
        return view('asistente.farmacia.botiquin',compact('medicamento','sucursales'));
    }

    public function editarmedicamento($id)
    {
        $medicina=Medicamento::find($id);
        $tipomedicamentos=TipoMedicamento::all();
        return view('asistente.farmacia.editarbotiquin',compact('medicina','id','tipomedicamentos'));
    }

    public function verbotiquin()
    {
        $sucursales=Sucursal::all();
        return view('asistente.farmacia.botiquinsucursal',compact('sucursales'));
    }

    public function agregarmedicamento(Request $request)
    {
        $fecha = $request->input('fecha');
        $id_sucursal = $request->get('sucursal');
        $id_medicamento = $request->input('medicamento');
        $date = date_create($fecha);
        $fecha_entrega= date_format($date, 'Y-m-d'); //fecha actual para ingresar a base


        $cantidad_sucursal = $request->input('cantidad_entrega');
        $cantidad_farmacia = $request->input('cantidad_farmacia');

        $stock=$cantidad_farmacia-$cantidad_sucursal;

        //echo "stock:",$stock,"cantidad:",$cantidad,"resultado:",$res;
        DB::table('botiquin')->insert(
            [
                'fecha_entrega'=>$fecha_entrega,
                'fecha_medicamento'=>null,
                'stock'=>$stock,
                'cantidad_entrega'=>null,
                'nombre_entrega'=>null,
                'nombre_recibe'=>null,
                'pk_id_sucursal'=>$id_sucursal,
                'pk_farmacia'=>$id_medicamento,
            ]
        );

        /*$medicamento=Farmacia::find($id_medicamento);
        $medicamento->cantidad=$stock;
        echo "medicamento_id:",$medicamento,"cantidad:",$stock;*/

        DB::table('farmacia')
            ->where('id',$id_medicamento)
            ->update(['cantidad'=>$stock]);

        echo "datos ingresados correctamente";
    }

    public function editar(Request $request)
    {
        $id = $request->input('id');
        $fecha = $request->input('fecha');
        $nombre = $request->input('nombre');
        $concentracion = $request->input('concentracion');
        $cantidad = $request->input('cantidad');

        $date = date_create($fecha);
        $fecha_reposicion= date_format($date, 'Y-m-d'); //fecha actual para ingresar a base
        DB::table('farmacia')
            ->where('id',$id)
            ->update(['nombre'=>$nombre,'concentracion'=>$concentracion,
                'cantidad'=>$cantidad,'fecha_reposicion'=>$fecha_reposicion]);

        echo "datos actualizados correctamente";
    }



}

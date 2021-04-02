<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Sucursal;

use Illuminate\Support\Facades\DB;

class SucursalController extends Controller
{
    //se esta siguiendo los pasos del siguiente video y hay un error con que no se encuentra el archivo 'app\empresa' en el controller
    //https://www.youtube.com/watch?v=CWcRoW3W_ys
    public function crear(Request $request)
    { //return $request->all();

        /*$empresa = new App\Empresa;

        $empresa->nombre = $request->nombre;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->email;
        $empresa->direccion_web = $request->direccion_web;
        $empresa->direccion = $request->direccion;

        $empresa->save(); 
        
            Esto ultimo no funciono
        */

        $this->validate($request, [
            'empresa_id'    => 'required',
            'region_id'     => 'required',
            'sucursal'      => 'required',
            'descripcion'   => 'required',
            'serial'        => 'required'
        ]);
        $sucursal = new Sucursal([
            'empresa_id'        => $request->get('empresa_id'),
            'region_id'         => $request->get('region_id'),
            'sucursal'          => $request->get('sucursal'),
            'descripcion'       => $request->get('descripcion'),
            'serial'            => $request->get('serial')
        ]);
        $SucursalController->save();




        return back()->with('mensaje','Sucursal Guardada Correctamente.');
    }

    public function bloquear ($id){
        $sucursal = Sucursal::find($id);
        if($sucursal->habilitar == 'true'){
            $sucursal->habilitar = 'false';
            $sucursal->save();
            return back()->with('sucess','Sucursal Bloqueada Correctamente. ');
        }else{
            $sucursal->habilitar = 'true';
            $sucursal->save();
            return back()->with('sucess','Sucursal Desbloqueada Correctamente.');
        }
    }

    public function eliminar($id){
        $sucursal = Sucursal::find($id);
        $sucursal->delete();

        return back()->with('sucess','Sucursal Eliminada Correctamente.');

    }

    public function editar(Request $request,  $id){
        $sucursal = Sucursal::find($id);
        return $sucursal;
    }



}

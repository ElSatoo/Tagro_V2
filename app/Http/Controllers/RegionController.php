<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use App\Region;

class RegionController extends Controller
{
    
	public function index(){
		$regions = DB::table('region')
                            ->orderBy('id','ASC')
                            ->paginate(5);


        return view('dashboard')->with('region', $regions);
	}

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
            'codigo_region'   => 'required',
            'nombre_region'   => 'required',
            'pais'			  => 'required'
        ]);
        $region = new Region([
            'codigo_region'   => $request->get('codigo_region'),
            'nombre_region'   => $request->get('nombre_region'),
            'pais' 			  => $request->get('pais')
        ]);
        $region->save();




        return back()->with('mensaje','Codigo Region Fue Guardado Correctamente.');
    }

}

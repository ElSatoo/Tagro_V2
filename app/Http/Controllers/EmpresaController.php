<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Empresa;

use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function index() /*Este metodo me ayuda a buscar los usuarios que hay en la base de datos y los listara*/
    {
        //$user = User::all(); //Muestra todos los usuarios que estan registrados en la base de datos
        $empresas = DB::table('empresas')
                            ->orderBy('id','ASC')
                            ->paginate(100);

        return view('buscar_usuario')->with('empresas', $empresas);


    }

    public function validar(Request $request)
    {
    	$credentials = $this->validate(request(), [
            'nombre'        => 'required|string',
            'telefono'      => 'required|integer',
            'email'         => 'email|required|string',
            'direccion_web' => 'required|string',
            'direccion'     => 'required|string',
            'habilitar'     => 'accepted'
        ]);


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
            'nombre'        => 'required',
            'telefono'      => 'required',
            'email'         => 'required',
            'direccion_web' => 'required',
            'direccion'     => 'required'
        ]);
        $empresa = new Empresa([
            'nombre'        => $request->get('nombre'),
            'telefono'      => $request->get('telefono'),
            'email'         => $request->get('email'),
            'direccion_web' => $request->get('direccion_web'),
            'direccion'     => $request->get('direccion'),
            'habilitar'     => $request->get('habilitar') ? true : false
        ]);
        $empresa->save();




        return back()->with('mensaje','Empresa Guardada Correctamente.');
    }
    // esto para saber el update https://www.youtube.com/watch?v=EWSSxd0Cb1o
    public function editar (Request $request,  $id){
        
        
        //update empresa
        
        $empresa = Empresa::find($id);
        $empresa->nombre        = $request->input('nombre');
        $empresa->telefono      = $request->input('telefono');
        $empresa->email         = $request->input('email');
        $empresa->direccion_web = $request->input('direccion_web');
        $empresa->direccion     = $request->input('direccion');
        $empresa->habilitar     = $request->input('habilitar') ? true : false;
        $empresa->save();




        return back()->with('sucess','Empresa Modificada Correctamente.');

    }

    public function bloquear ($id){
        $empresa = Empresa::find($id);
        if($empresa->habilitar == 'true'){
            $empresa->habilitar = 'false';
            $empresa->save();
            return back()->with('sucess','Empresa Bloqueada Correctamente. ');
        }else{
            $empresa->habilitar = 'true';
            $empresa->save();
            return back()->with('sucess','Empresa Desbloqueada Correctamente.');
        }



    }

    public function eliminar($id){
        $empresa = Empresa::find($id);
        $empresa->delete();

        return back()->with('sucess','Empresa Eliminada Correctamente.');
    }



    




}

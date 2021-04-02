<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function index() /*Este metodo me ayuda a buscar los usuarios que hay en la base de datos*/
    {
    	//$user = User::all(); //Muestra todos los usuarios que estan registrados en la base de datos
    	/*$users = DB::table('users')
                            ->orderBy('id','ASC')
                            ->paginate(5);
        $empresas = DB::table('empresas')
                            ->orderBy('id','ASC')
                            ->paginate(5);


        return view('buscar_usuario')->with('users', $users)->with('empresas', $empresas); */

        $users = DB::table('users')
                            ->orderBy('id','ASC')
                            ->paginate(5);

        return view('buscar_usuario')->with('users', $users);
    }
    /*public function index2() /*Este metodo me ayuda a buscar los usuarios que hay en la base de datos y los listara
    {
        //$user = User::all(); //Muestra todos los usuarios que estan registrados en la base de datos
        
        return view('buscar_usuario')->with('empresas', $empresas);


    }*/

    public function crear(Request $request)
    {
    	$this->validate($request, [
            'nombre'            => 'required',
            'apellido'          => 'required',
            'cedula'            => 'required',
            'telefono'          => 'required',
            'email'             => 'email',
            'name'              => 'required',
            'password'          => 'required|confirmed'
        ]);
        $usuario = new User([
            'nombre'        => $request->get('nombre'),
            'apellido'      => $request->get('apellido'),
            'cedula'        => $request->get('cedula'),
            'telefono'      => $request->get('telefono'),
            'email'         => $request->get('email'),
            'tipo_usu'      => $request->get('tipo_usu'),
            'name'          => $request->get('name'),
            'password'      => Hash::make($request->get('password')),
            'habilitar'     => $request->get('habilitar') ? true : false
        ]);
        $usuario->save();

        return back()->with('mensaje','Usuario Guardada Correctamente.');
    }


    public function store(Request $request)
    {
    	
    }

    public function bloquear($id){
        $user = User::find($id);
        if($user->habilitar == 'false'){
            $user->habilitar = 'true';
            $user->save();
            return back()->with('sucess','Usuario Bloqueado Correctamente. ');
        }else{
            $user->habilitar = 'false';
            $user->save();
            return back()->with('sucess','Usuario Desbloqueado Correctamente. ');
        }

    }

    public function editar (Request $request,  $id) {
        $user = User::find($id);
        $user->nombre           = $request->input('nombre');
        $user->apellido         = $request->input('apellido');
        $user->cedula           = $request->input('cedula');
        $user->telefono         = $request->input('telefono');
        $user->email            = $request->input('email');
        $user->tipo_usu         = $request->input('tipo_usu');
        $user->name             = $request->input('name');
        $user->password         = $request->input('password');
        $user->habilitar        = $request->input('habilitar') ? true : false;
        $user->save();




        return back()->with('sucess','Usuario Modificado Correctamente.');

    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }





}

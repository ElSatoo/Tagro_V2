<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index() /*Aqui solo me servira para listar todas las consultas sql que quiera poner dentro de un dropdown o en un listar*/
    {
    	$users = DB::table('users')
                            ->orderBy('id','ASC')
                            ->paginate(999);
        $empresas = DB::table('empresas')
                            ->orderBy('id','ASC')
                            ->paginate(999);
        $regions = DB::table('regions')
        					->orderBy('id','ASC')
        					->paginate(999);
        $tipo_user = DB::table('tipo_usuarios')
        					->orderBy('id','ASC')
        					->paginate(999);
        $sucursals = DB::table('agregar_sucursals')
        					->orderBy('id','ASC')
        					->paginate(999);

        return view('dashboard')->with('users', $users)
        						->with('empresas', $empresas)
        						->with('regions', $regions)
        						->with('tipo_user', $tipo_user)
        						->with('sucursals', $sucursals);
    	

    }
}

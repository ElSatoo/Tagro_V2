<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    public function __construc()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    

    public function login()
    {
        $credentials = $this->validate(request(), [
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);

       
        //return $credentials; // esto me retorna lo que puse en las credenciales de la de arriba.

        if (Auth::attempt($credentials)) 
        {
            //return "Tu sesion ha iniciado correctamente";// me funciono con un usuario de tinker // la contraseña de los usuarios tinker son secret
            return redirect()->route('dashboard');
        } 

        return back()
            ->withErrors([$this->username() => 'Estas credenciales no coinciden con nuetros registros'])
            ->withInput(request([$this->username()]));

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function username()
    {
        return 'name'; //esto me retorna el valor de name en el usuario, y se cambio todos los campos de email por $this->username();
    }
 
}

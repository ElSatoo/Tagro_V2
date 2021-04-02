<?php

/*
Route::get('/', function () {
    return view('auth.login');
});
*/

// Ruta para las views.

Route::get('/','Auth\LoginController@showLoginForm');

/*Route::get('/home', function(){
	return view('home');
});*/

Route::get('/asignar_usuario',function(){
	return view('asignar_usuario');
});

Route::get('/cultia', function(){
	return view('cultia');
});


Route::get('/email',function(){
	return view('auth.passwords.email');
});


/*Route::get('/buscar_usuario', function(){
	return view('buscar_usuario');
}); */


// Ruta que estan relacionados con CONTROLLERS (Retornar valores de bbdd)
Route::get('buscar_usuario','UserController@index')->name('buscar_usuario');//muestra las dos tablas que hay en el buscar usuarios de usuario y empresa
Route::get('dashboard', 'DashboardController@index')->name('dashboard'); //dentro de este controller hay un index donde solo se listara los datos que hay en los datos de tabla



//Route::get('mostrar_user','Auth\LoginController@mostrarUser')->name('mostrar_user');

//======================
// Ruta para los POST
//======================
// ========================== POST LOGIN AND LOGOUT =======================
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//=========================== END REGION ==================================

// ========================== EMPRESA ===========================
//Agregar Empresa
Route::post('dashboard.empresa', 'EmpresaController@crear')->name('empresa.crear');
//Modificar Empresa
Route::patch('dashboard.empresa/edit/{Empresa}', 'EmpresaController@editar')->name('empresa.editar');
//Bloquear/Desbloquear Empresa
Route::post('dashboard.empresa/bloquear/{id}', 'EmpresaController@bloquear')->name('empresa.bloquear');
//Elminar Empresa
Route::delete('dasboard.empresa/eliminar/{Empresa}', 'EmpresaController@eliminar')->name('empresa.eliminar');

//=========================== SUCURSAL ================================
//Agregar Sucursal
Route::post('dashboard.sucursal', 'SucursalController@crear')->name('sucursal.crear');
//Modificar Sucursal
Route::patch('dashboard.sucursal/edit/{Sucursal}', 'SucursalController@editar')->name('sucursal.editar');
//Bloquear Sucursal
Route::post('dashboard.sucursal/bloquear/{id}', 'SucursalController@bloquear')->name('sucursal.bloquear');
//Eliminar Sucursal
Route::delete('dashboard.sucursal/eliminar/{Sucursal}' , 'SucursalController@eliminar')->name('sucursal.eliminar');

//=========================== USUARIO =================================
//Crear Usuario
Route::post('dashboard.usuario', 'UserController@crear')->name('usuario.crear');
//Modificar Usuario
Route::patch('dashboard.usuario/edit/{User}', 'UserController@editar')->name('usuario.editar');
//bloquear usuario
Route::post('dashboard.usuario/bloquear/{id}', 'UserController@bloquear')->name('usuario.bloquear');
//Eliminar Usuario
Route::delete('dashboard.usuario/eliminar/{User}', 'UserController@eliminar')->name('usuario.eliminar');

//===========================  REGION ==================================
//Agregar Region
Route::post('dashboard.region', 'RegionController@crear')->name('region.crear'); //seguir  este formato ya que funciona sin saber porque.





// ========================= POST PARA RESETEAR PASSWORD POR EMAIL ========
Route::get('passwords/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('passwords.request');
Route::post('passwords/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('passwords.email');


Route::get('passwords/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('passwords.reset');
Route::post('passwords/reset', 'Auth\ResetPasswordController@reset');
//========================
//Ruta para Reset Routes
//========================
//=========================== PARA ACCEDER A LA PAGINA DE RESET PASSWORD =================
//Route::get('/reset_password','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// ========================== END REGION =================================================







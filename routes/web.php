<?php

use Illuminate\Support\Facades\Route;

Route::get('/','InicioController@index')->name('inicio');
Route::get('/inicio','InicioController@inicio')->name('inicio1');
Route::get('seguridad/login', 'seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'seguridad\LoginController@login')->name('login-post');
Route::get('seguridad/logout', 'seguridad\LoginController@logout')->name('logout');
Route::post('ajax-sesion', 'AjaxController@setSession')->name('ajax')->middleware('auth');

Route::group(['prefix' => 'admin', 'namespace'=>'Admin', 'middleware' => ['auth', 'superadmin']], function() {
    Route::get('','AdminController@index');

    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('usuario/crear', 'UsuarioController@crear')->name('crear_usuario');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar_usuario');
    Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario');
    Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario');
    Route::delete('usuario/{id}', 'UsuarioController@eliminar')->name('eliminar_usuario');

    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
    Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
    Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');

    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');

    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');

    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');

    Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
    Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_permiso_rol');
});

Route::group(['prefix' => 'produccion', 'namespace'=>'Produccion', 'middleware' => ['auth']], function() {
    Route::get('inventario', 'InventarioController@index')->name('inventario');
    Route::get('inventario/crear', 'InventarioController@crear')->name('crear_inventario');
    Route::post('inventario', 'InventarioController@guardar')->name('guardar_inventario');
    Route::get('inventario/{id}/editar', 'InventarioController@editar')->name('editar_inventario');
    Route::put('inventario/{id}', 'InventarioController@actualizar')->name('actualizar_inventario');
    Route::delete('inventario/{id}', 'InventarioController@eliminar')->name('eliminar_inventario');

    Route::get('cliente', 'ClienteController@index')->name('cliente');
    Route::get('cliente/crear', 'ClienteController@crear')->name('crear_cliente');
    Route::post('cliente', 'ClienteController@guardar')->name('guardar_cliente');
    Route::get('cliente/{id}/editar', 'ClienteController@editar')->name('editar_cliente');
    Route::put('cliente/{id}', 'ClienteController@actualizar')->name('actualizar_cliente');
    Route::delete('cliente/{id}', 'ClienteController@eliminar')->name('eliminar_cliente');

    Route::get('proveedor', 'ProveedoresController@index')->name('proveedor');
    Route::get('proveedor/crear', 'ProveedoresController@crear')->name('crear_proveedor');
    Route::post('proveedor', 'ProveedoresController@guardar')->name('guardar_proveedor');
    Route::get('proveedor/{id}/editar', 'ProveedoresController@editar')->name('editar_proveedor');
    Route::put('proveedor/{id}', 'ProveedoresController@actualizar')->name('actualizar_proveedor');
    Route::delete('proveedor/{id}', 'ProveedoresController@eliminar')->name('eliminar_proveedor');

    Route::get('categorias', 'CategoriaController@index')->name('categorias');

    Route::get('venta', 'VentaController@index')->name('ventas');
    Route::get('venta/crear', 'VentaController@crear')->name('crear_venta');
    Route::get('venta/{id}/ver', 'VentaController@ver')->name('ver_venta')->where('id','[0-9]+');

    Route::post('productoDeVenta', 'VenderController@agregarProductoVenta')->name('agregarProductoVenta');
    Route::get('vender', 'VenderController@index')->name('vender');
    Route::get('productoDeVenta', 'VenderController@quitarProductoDeVenta')->name('quitarProductoDeVenta');
    Route::post('terminarOCancelarVenta', 'VenderController@terminarOCancelarVenta')->name('terminarOCancelarVenta');

    Route::get('compra', 'CompraController@index')->name('compras');
    Route::get('compra/crear', 'CompraController@crear')->name('crear_compra');
    Route::get('compra/{id}/ver', 'CompraController@ver')->name('ver_compra')->where('id','[0-9]+');

    Route::post('productoDeCompra', 'ComprarController@agregarProductoCompra')->name('agregarProductoCompra');
    Route::get('comprar', 'ComprarController@index')->name('comprar');
    Route::get('productoDeCompra', 'ComprarController@quitarProductoDeCompra')->name('quitarProductoDeCompra');
    Route::post('terminarOCancelarCompra', 'ComprarController@terminarOCancelarCompra')->name('terminarOCancelarCompra');
});

Route::group(['prefix' => 'empleado', 'namespace'=>'Empleado', 'middleware' => ['auth']], function() {
    Route::get('empleado', 'EmpleadoController@index')->name('empleado');
    Route::get('empleado/crear', 'EmpleadoController@crear')->name('crear_empleado');
    Route::post('empleado', 'EmpleadoController@guardar')->name('guardar_empleado');
    Route::get('empleado/{id}/editar', 'EmpleadoController@editar')->name('editar_empleado');
    Route::put('empleado/{id}', 'EmpleadoController@actualizar')->name('actualizar_empleado');
    Route::delete('empleado/{id}', 'EmpleadoController@eliminar')->name('eliminar_empleado');

    Route::get('proyecto', 'ProyectoController@index')->name('proyecto');
    Route::get('proyecto/crear', 'ProyectoController@crear')->name('crear_proyecto');
    Route::post('proyecto', 'ProyectoController@guardar')->name('guardar_proyecto');
    Route::get('proyecto/{id}/editar', 'ProyectoController@editar')->name('editar_proyecto');
    Route::get('proyecto/{id}/ver', 'ProyectoController@ver')->name('ver_proyecto');
    Route::put('proyecto/{id}', 'ProyectoController@actualizar')->name('actualizar_proyecto');
    Route::delete('proyecto/{id}', 'ProyectoController@eliminar')->name('eliminar_proyecto');

    Route::get('departamento', 'DepartamentoController@index')->name('departamento');
    Route::get('departamento/crear', 'DepartamentoController@crear')->name('crear_departamento');
    Route::post('departamento', 'DepartamentoController@guardar')->name('guardar_departamento');
    Route::get('departamento/{id}/editar', 'DepartamentoController@editar')->name('editar_departamento');
    Route::put('departamento/{id}', 'DepartamentoController@actualizar')->name('actualizar_departamento');
    Route::delete('departamento/{id}', 'DepartamentoController@eliminar')->name('eliminar_departamento');

    Route::get('sueldo', 'SueldoController@index')->name('sueldo');
    Route::get('sueldo/crear', 'SueldoController@crear')->name('crear_sueldo');
    Route::post('sueldo', 'SueldoController@guardar')->name('guardar_sueldo');
    Route::get('sueldo/{id}/editar', 'SueldoController@editar')->name('editar_sueldo');
    Route::put('sueldo/{id}', 'SueldoController@actualizar')->name('actualizar_sueldo');
    Route::delete('sueldo/{id}', 'SueldoController@eliminar')->name('eliminar_sueldo');

    Route::get('bauche', 'BaucheController@index')->name('bauche');
    Route::delete('bauche/{id}', 'BaucheController@eliminar')->name('eliminar_bauche');
    Route::get('bauche/{id}/crear', 'BaucheController@crear')->name('crear_bauche');

    Route::get('planilla/entrada', 'HoraController@crear')->name('hora_entrada');
    Route::post('/', 'HoraController@guardar')->name('guardar_horaentrada');

    Route::get('planilla/salida', 'HoraSController@crear')->name('hora_salida');
    Route::post('planilla', 'HoraSController@guardar')->name('guardar_horasalida');
});

Route::group(['prefix' => 'evento', 'namespace'=>'Evento', 'middleware'=>['auth']], function(){
    Route::get('evento', 'EventoController@index')->name('evento');
    Route::post('evento/ver', 'EventoController@show');
    Route::post('evento/agregar', 'EventoController@store');
    Route::post('evento/editar/{id}', 'EventoController@edit');
    Route::post('evento/actualizar/{evento}', 'EventoController@update');
    Route::post('evento/borrar/{id}', 'EventoController@destroy');
});
<?php

namespace Database\Seeders;

use App\Models\Admin\Permiso;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permiso')->insert([
            'nombre' => 'Permiso Rol',
            'slug' => 'permiso-rol',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Asignar Permiso',
            'slug' => 'asignar-permiso',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Empleado',
            'slug' => 'crear-empleado',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Producto',
            'slug' => 'crear-producto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Cliente',
            'slug' => 'crear-cliente',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Proveedores',
            'slug' => 'crear-proveedores',
        ]);
        

        DB::table('permiso')->insert([
            'nombre' => 'Editar Empleado',
            'slug' => 'crear-empleado',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Producto',
            'slug' => 'crear-producto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Cliente',
            'slug' => 'crear-cliente',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Proveedores',
            'slug' => 'crear-proveedores',
        ]);


        DB::table('permiso')->insert([
            'nombre' => 'Listar Empleado',
            'slug' => 'crear-empleado',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Producto',
            'slug' => 'crear-producto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Cliente',
            'slug' => 'crear-cliente',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Proveedores',
            'slug' => 'crear-proveedores',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Usuarios',
            'slug' => 'listar-usuarios',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Usuarios',
            'slug' => 'crear-usuarios',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Usuarios',
            'slug' => 'guardar-usuarios',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Usuarios',
            'slug' => 'editar-usuarios',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Usuarios',
            'slug' => 'eliminar-usuarios',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Evento',
            'slug' => 'guardar-evento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Evento',
            'slug' => 'editar-evento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Evento',
            'slug' => 'actualizar-evento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Evento',
            'slug' => 'eliminar-evento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Hacer Venta',
            'slug' => 'hacer-venta',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Hacer Compra',
            'slug' => 'hacer-compra',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Proyecto',
            'slug' => 'listar-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Proyecto',
            'slug' => 'crear-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Proyecto',
            'slug' => 'guardar-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Ver Proyecto',
            'slug' => 'ver-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Proyecto',
            'slug' => 'editar-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Proyecto',
            'slug' => 'actualizar-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Proyecto',
            'slug' => 'eliminar-proyecto',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Proveedores',
            'slug' => 'guardar-proveedores',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Proveedores',
            'slug' => 'actualizar-proveedores',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Proveedores',
            'slug' => 'eliminar-proveedores',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Cliente',
            'slug' => 'guardar-cliente',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Cliente',
            'slug' => 'actualizar-cliente',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Cliente',
            'slug' => 'eliminar-cliente',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Departamento',
            'slug' => 'listar-departamento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Departamento',
            'slug' => 'crear-departamento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Departamento',
            'slug' => 'guardar-departamento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Departamento',
            'slug' => 'editar-departamento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Departamento',
            'slug' => 'actualizar-departamento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Departamento',
            'slug' => 'eliminar-departamento',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Empleado',
            'slug' => 'guardar-empleado',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Empleado',
            'slug' => 'actualizar-empleado',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Empleado',
            'slug' => 'eliminar-empleado',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Roles',
            'slug' => 'listar-roles',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Roles',
            'slug' => 'crear-roles',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Roles',
            'slug' => 'guardar-roles',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Roles',
            'slug' => 'editar-roles',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Roles',
            'slug' => 'actualizar-roles',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Roles',
            'slug' => 'eliminar-roles',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Menus',
            'slug' => 'listar-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Menus',
            'slug' => 'crear-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Menus',
            'slug' => 'guardar-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Menus',
            'slug' => 'editar-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Menus',
            'slug' => 'actualizar-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Menus',
            'slug' => 'eliminar-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Ordenar Menus',
            'slug' => 'ordenar-menus',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Permisos',
            'slug' => 'listar-permisos',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Permisos',
            'slug' => 'crear-permisos',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Guardar Permisos',
            'slug' => 'guardar-permisos',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Permisos',
            'slug' => 'editar-permisos',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Actualizar Permisos',
            'slug' => 'actualizar-permisos',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Eliminar Permisos',
            'slug' => 'eliminar-permisos',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Menu Rol',
            'slug' => 'menu-rol',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Asignar Menu',
            'slug' => 'asignar-menu',
        ]);



















        
        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '1',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '2',
        ]);
    }
}

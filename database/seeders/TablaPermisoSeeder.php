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
        //
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
            'nombre' => 'Crear Permiso',
            'slug' => 'crear-permiso',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Menu',
            'slug' => 'crear-menu',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Crear Rol',
            'slug' => 'crear-rol',
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
            'nombre' => 'Editar Permiso',
            'slug' => 'crear-permiso',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Menu',
            'slug' => 'crear-menu',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Editar Rol',
            'slug' => 'crear-rol',
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
            'nombre' => 'Listar Permiso',
            'slug' => 'crear-permiso',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Menu',
            'slug' => 'crear-menu',
        ]);

        DB::table('permiso')->insert([
            'nombre' => 'Listar Rol',
            'slug' => 'crear-rol',
        ]);















        
        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '1',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '2',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '3',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '4',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '5',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '6',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '7',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '8',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '9',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '10',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '11',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '12',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '13',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '14',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '15',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '16',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '17',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '18',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '19',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '20',
        ]);

        DB::table('permiso_rol')->insert([
            'rol_id' => '1',
            'permiso_id' => '21',
        ]);
    }
}

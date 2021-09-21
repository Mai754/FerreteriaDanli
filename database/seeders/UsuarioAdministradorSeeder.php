<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usuario' => 'Admin',
            'password' => bcrypt('pass123'),
            'nombre' => 'Admin',
            'email' => 'prueba@gmail.com',
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 1,
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 3,
            'usuario_id' => 1,
        ]);
    }
}

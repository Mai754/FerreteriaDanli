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
        ]);

        DB::table('usuario')->insert([
            'usuario' => 'Rat',
            'password' => bcrypt('pass123'),
            'nombre' => 'Roberto',
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 1,
            'usuario_id' => 1,
            'estado' => 1,
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id' => 2,
            'usuario_id' => 2,
            'estado' => 1,
        ]);
    }
}

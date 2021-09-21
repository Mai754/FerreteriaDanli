<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Admin Desarrollo',
            'url' => '#',
            'orden' => '7',
            'icono' => 'bx bx-cog',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Menus',
            'url' => '#',
            'orden' => '3',
            'icono' => 'fa-circle',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Rols',
            'url' => '#',
            'orden' => '1',
            'icono' => 'fa-circle',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '1',
            'nombre' => 'Permisos',
            'url' => '#',
            'orden' => '2',
            'icono' => 'fa-circle',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '2',
            'nombre' => 'Menu-rol',
            'url' => 'admin/menu-rol',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Ajustes de inventario',
            'url' => '#',
            'orden' => '5',
            'icono' => 'fa-adjust',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Clientes',
            'url' => '#',
            'orden' => '3',
            'icono' => 'fa-star',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Proveedores',
            'url' => '#',
            'orden' => '2',
            'icono' => 'fa-bookmark',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Empleado',
            'url' => '#',
            'orden' => '4',
            'icono' => 'fa-user',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '10',
            'nombre' => 'Administrar Empleados',
            'url' => '#',
            'orden' => '4',
            'icono' => 'fa-circle',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '2',
            'nombre' => 'Crear Menu',
            'url' => 'admin/menu/crear',
            'orden' => '3',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '2',
            'nombre' => 'Menu',
            'url' => 'admin/menu',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '3',
            'nombre' => 'Rol',
            'url' => 'admin/rol',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '3',
            'nombre' => 'Crear Rol',
            'url' => 'admin/rol/crear',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '7',
            'nombre' => 'Inventario',
            'url' => 'produccion/inventario',
            'orden' => '1',
            'icono' => 'fa-search',
        ]);
        
        DB::table('menu')->insert([
            'menu_id' => '7',
            'nombre' => 'Nuevo Producto',
            'url' => 'produccion/inventario/crear',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '8',
            'nombre' => 'Cliente',
            'url' => 'produccion/cliente',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '8',
            'nombre' => 'Nuevo Cliente',
            'url' => 'produccion/cliente/crear',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '9',
            'nombre' => 'Proveedor',
            'url' => 'produccion/proveedor',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '9',
            'nombre' => 'Nuevo Proveedor',
            'url' => 'produccion/proveedor/crear',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '11',
            'nombre' => 'Empleados',
            'url' => 'empleado/empleado',
            'orden' => '3',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '11',
            'nombre' => 'Nuevo Empleados',
            'url' => 'empleado/empleado',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '4',
            'nombre' => 'Permisos',
            'url' => 'admin/permiso',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '4',
            'nombre' => 'Crear Permisos',
            'url' => 'admin/permiso/crear',
            'orden' => '2',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '4',
            'nombre' => 'Permiso Rol',
            'url' => 'admin/permiso-rol',
            'orden' => '3',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Inicio',
            'url' => '/',
            'orden' => '1',
            'icono' => 'bx bx-home',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Ventas',
            'url' => 'produccion/venta',
            'orden' => '6',
            'icono' => 'fa-shopping-cart',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Usuarios',
            'url' => 'admin/usuario',
            'orden' => '1',
            'icono' => 'fa-users',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '32',
            'nombre' => 'Proyectos',
            'url' => 'empleado/proyecto',
            'orden' => '1',
            'icono' => 'fa-briefcase',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '32',
            'nombre' => 'Crear Proyecto',
            'url' => 'empleado/proyecto/crear',
            'orden' => '2',
            'icono' => 'fa-fire',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '10',
            'nombre' => 'Proyecto',
            'url' => '#',
            'orden' => '2',
            'icono' => 'fa-cube',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Calendario',
            'url' => 'evento/evento',
            'orden' => '2',
            'icono' => 'bx bx-calendar',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '40',
            'nombre' => 'Hora de ingreso',
            'url' => 'empleado/planilla/entrada',
            'orden' => '2',
            'icono' => 'bx bx-exit-fullscreen',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '40',
            'nombre' => 'Hora de salida',
            'url' => 'empleado/planilla/salida',
            'orden' => '1',
            'icono' => 'bx bx-exit',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '10',
            'nombre' => 'Departamentos',
            'url' => 'empleado/departamento',
            'orden' => '3',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '38',
            'nombre' => 'Sueldo',
            'url' => 'empleado/sueldo',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '10',
            'nombre' => 'Sueldos',
            'url' => '#',
            'orden' => '1',
            'icono' => 'fa-circle',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '11',
            'nombre' => 'Bauches',
            'url' => 'empleado/bauche',
            'orden' => '1',
            'icono' => 'fa-ban',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Ingreso y Salida',
            'url' => '#',
            'orden' => '5',
            'icono' => 'bx bx-alarm-add',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Vender',
            'url' => 'produccion/venta/crear',
            'orden' => '3',
            'icono' => 'bx bxs-cart-download',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Admin Cliente',
            'url' => '#',
            'orden' => '6',
            'icono' => 'bx bx-cog',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '0',
            'nombre' => 'Comprar',
            'url' => 'produccion/compra/crear',
            'orden' => '4',
            'icono' => 'bx bxs-cart-add',
        ]);

        DB::table('menu')->insert([
            'menu_id' => '41',
            'nombre' => 'Compras',
            'url' => 'produccion/compra',
            'orden' => '7',
            'icono' => 'fa-shopping-cart',
        ]);



        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '1',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '2',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '3',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '4',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '5',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '6',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '7',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '8',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '9',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '10',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '11',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '12',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '13',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '14',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '15',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '16',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '17',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '18',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '19',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '20',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '21',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '22',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '23',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '24',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '25',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '26',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '27',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '28',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '29',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '30',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '31',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '32',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '33',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '34',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '35',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '36',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '37',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '38',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '39',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '40',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '41',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '42',
        ]);

        DB::table('menu_rol')->insert([
            'rol_id' => '1',
            'menu_id' => '43',
        ]);
    }
}

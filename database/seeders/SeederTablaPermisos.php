<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operacions sobre tabla blogs
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

             //Operacions sobre tabla unidad de medida
             'ver-unidad',
             'crear-unidad',
             'editar-unidad',
             'borrar-unidad',
              //Operacions sobre tabla marca
              'ver-tipodocumento',
              'crear-tipodocumento',
              'editar-tipodocumento',
              'borrar-tipodocumento',

             //Operacions sobre tabla marca
             'ver-marca',
             'crear-marca',
             'editar-marca',
             'borrar-marca'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}

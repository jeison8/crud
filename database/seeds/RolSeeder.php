<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'name' => 'Profesional de proyectos - Desarrollador'],
            ['id' => 2, 'name' => 'Gerente estratégico'],
            ['id' => 3, 'name' => 'Auxiliar administrativo'] 
        ];


        foreach ($roles as  $rol) {
            Rol::updateOrcreate(['id' => $rol['id']], $rol);
        }
    }
}

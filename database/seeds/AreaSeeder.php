<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            ['id' => 1, 'nombre' => 'Administracion'],
            ['id' => 2, 'nombre' => 'Contabilidad'],
            ['id' => 3, 'nombre' => 'Diseño'] 
        ];


        foreach ($areas as  $area) {
            Area::updateOrcreate(['id' => $area['id']], $area);
        }
    }
}


        

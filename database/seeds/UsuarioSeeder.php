<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
               ['id' => 1, 'tipo_documento' => 1, 'numero_documento' => 1130639888, 'nombres' => 'Jeison Gabriel',
               'apellidos' => 'Hurtado Cabrera', 'email' => 'jeisonhurtado1988@hotmail.com','password' => bcrypt('12345'),
               'direccion' => 'Calle 32a #20-40', 'telefono' => 3281221, 
               ]
        ];

        foreach ($usuarios as  $usuario) {
            Usuario::updateOrcreate(['id' => $usuario['id']], $usuario);
        }
    }
}

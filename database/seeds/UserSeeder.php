<?php

use App\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $tipo_documento_id=DB::table('tipo_documento')->select('id')->take(1)->get();
        // $genero_id=DB::table('genero')->select('id')->take(1)->get();
        // $municipios=DB::table('municipios')->select('id')->take(1)->get();
        // $municipios=DB::table('cups')->select('id')->take(1)->get();


        // DB::table('usuarios')->insert([
        //     'nombres'=>'Jeison Gabriel',
        //     'apellidos'=>'Hurtado Cabrera',
        //     'tipo_documento_id'=>$tipo_documento_id->first(),
        //     'numero_documento'=>1988,
        //     'email'=>'jeisonhurtado1988@hotmail.com',
        //     'password'=>bcrypt('12345'),
        //     //'remenber_token'=>'what..',
        //     'foto'=>'https://imagen.png',
        //     'telefono'=>'3281221',
        //     'direccion'=>'calle 32a #20-40',
        //     'fecha_nacimiento'=>2010-01-07,
        //     'cargo'=>'Developer',
        //     'registro_medico'=>'higado',
        //     'firma'=>'Jei',
        //     'genero_id'=>$genero_id->first(),
        //     //'created_at'=>2019-01-07,
        //     //'updated_at'=>2020-01-07,
        //     'municipio_id'=>$municipios->first(),
        //     'estado'=>'1',
        //     'cups_primero_id'=>$municipios->first(),
        //     'cups_control_id'=>$municipios->first(),

        // ]);
    }
}

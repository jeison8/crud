<?php

namespace App\Http\Controllers;

use App\Rol;
use App\Area;
use App\Usuario;
use App\UsuarioRol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Rol::all();
        $areas = Area::all();

        return view('usuarios.create',compact('areas','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre' => 'regex:/^[a-zá-úÁ-ÚA-ZñÑ\s<]+$/u|min:2|max:100',
            'email' => 'email'
        ]);
  
        $ususario = Usuario::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'sexo' => $request->sexo,
            'area_id' => $request->area_id,
            'boletin' => $request->boletin ?? 0,
            'descripcion' => $request->descripcion
        ]);

        if($ususario){
            foreach ($request->rol as  $rol) {
                UsuarioRol::create([
                    'usu_id' => $ususario->id,
                    'rol_id' => $rol
                ]);
            }
        }
        
        return redirect()->route('usuarios.index')->with('success', 'Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar la firma
        /* $public_path = public_path();
        $url = $public_path.'/storage/'.$archivo; */ 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        $areas = Area::all();
        $roles = Rol::all();
        $rolUsuario = UsuarioRol::where('usu_id',$usuario->id)->get();
        $conteo = count($rolUsuario);

        return view('usuarios.edit', compact('usuario', 'areas','roles','rolUsuario','conteo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre' => 'regex:/^[a-zá-úÁ-ÚA-ZñÑ\s<]+$/u|min:2|max:100',
            'email' => 'email'
        ]);
    
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->area_id = $request->area_id;
        $usuario->boletin = $request->boletin ?? 0;
        $usuario->descripcion = $request->descripcion;
        $usuario->save();

        UsuarioRol::where('usu_id',$usuario->id)->delete();

        foreach ($request->rol as  $rol) {
            UsuarioRol::create([
                'usu_id' => $usuario->id,
                'rol_id' => $rol
            ]);
        }

        return redirect()->route('usuarios.index')->with('success', 'Se actualizo el registro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {   
        UsuarioRol::where('usu_id',$usuario->id)->delete();

        $usuario->delete();
        
        return redirect()->route('usuarios.index')->with('success', 'Se ha eliminado el registro');
    }
}

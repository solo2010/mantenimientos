<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\DB;
use Lacarasts\Flash\Flash;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\UsuarioUpdateRequest;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = DB::table('usuarios')->paginate(5);
        return view('tecnico.usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('tecnico.usuarios.create');
    }

    public function store(UsuarioRequest $request)
    {
        $usuario = new Usuario($request->all());
        $usuario->save();
        flash('Se ha registrado a ' . $usuario->nombres . ' correctamente')->success()->important();
        return redirect()->route('usuarios.index');

        
    }

    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('tecnico.usuarios.edit', ['usuario' => $usuario]);
    }


    public function update(UsuarioUpdateRequest $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->cedula = $request->cedula;
        $usuario->idArea = $request->idArea;
        $usuario->cargo = $request->cargo;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->save();
        flash('Se ha editado el usuario ' . $usuario->nombres . ' sin problemas.')->important();
        return redirect()->route('usuarios.index');
 
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        flash('El usuario ' . $usuario->nombres . ' ha sido eliminado')->error()->important();
        return redirect()->route('usuarios.index');
    }
}

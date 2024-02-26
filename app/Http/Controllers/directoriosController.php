<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Directorio;

class directoriosController extends Controller
{
    //
    public function principal(){
        $contactos = Contacto::all();
        return view('directorio', compact('contactos'));
    }

    public function crear(){
        return view('crearEntrada');
    }

    public function guardar(Request $request){
        $directorio = new Directorio();
        $directorio->codigoEntrada = $request->codigo;
        $directorio->nombre = $request->nombre;
        $directorio->apellido = $request->apellido;
        $directorio->correo = $request->correo;
        $directorio->telefono = $request->telefono;
        $directorio->save();

        return redirect('/');
    }

    public function buscar(){
        return view('buscar');
    }

    public function busqueda(){
       
        
    }

    public function eliminado(){
        $directorio = Directorio::all();
        $directorio->delete();
        redirect('/crearEntrada');
    }

}

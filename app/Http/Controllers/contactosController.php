<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Contacto;

class contactosController extends Controller
{
    //
    public function eliminar(){
        $directorios = Directorio::all();
        return view('eliminar', compact('directorios'));
    }

    public function verContacto($id){
            $contactos = Contacto::all();
            $contac = Contacto::find($id);
        return view('vercontactos', compact('contactos', 'contac'));
    }

    public function agregarContacto(){
        return view('agregarcontacto');
    }

    public function guardar(Request $request){
        $contacto = new Contacto();
        $contacto->codigoEntrada = $request->codigoentrada;
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->telefono = $request->telefono;
        $contacto->save();

        return redirect('/');
    }

    public function eliminarContacto($id){
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect('/');
    }
}

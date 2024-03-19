<?php

// namespace App\Resource\Autor;
namespace App\Resource\autor;

use App\Models\Autor;

class ManagerAutor
{

    public function listarAutor()
    {

        return Autor::all();
    }

    public function crearAutor($request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);

        return Autor::create([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
        ]);
    }
    public function actualizarAutor($request, $id)
    {

        return Autor::where("id", $id)->update([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
        ]);
    }
    public function eliminarAutor($id)
    {
        return Autor::where("id", $id)->delete();
    }
}

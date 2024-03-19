<?php

namespace App\Resource\libro;

use App\Models\Libro;

class ManagerLibro
{

    public function listarLibro()
    {
        return Libro::all();
    }

    public function crearLibro($request)
    {
        $request->validate([
            'titulo' => 'required',
            'categoria' => 'required',
        ]);

        return Libro::create([
            "titulo" => $request->titulo,
            "categoria" => $request->categoria,
        ]);
    }

    public function verLibro($id)
    {
        return Libro::where("id", $id )->get();
    }
    public function actualizarLibro($request, $id)
    {

        return Libro::where("id", $id)->update([
            "titulo" => $request->titulo,
            "categoria" => $request->categoria,
        ]);
    }
    public function eliminarLibro($id)
    {
        return Libro::where("id", $id)->delete();
    }
}

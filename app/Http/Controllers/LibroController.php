<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resource\Libro\ManagerLibro;

use App\Resource\Autor\ManagerAutor;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $managerLibro;
    public $managerAutor;


    function __construct()
    {
        $this->managerLibro = new ManagerLibro();
        $this->managerAutor = new ManagerAutor();
    }
    public function index()
    {
        $libros = $this->managerLibro->listarLibro();
        $autores = $this->managerAutor->listarAutor();



        return view("libros.index")
            ->with("autor", $autores)
            ->with("libro", $libros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro = $this->managerLibro->crearLibro($request);

        if ($libro) {
            return redirect()->back();
        } else {
            dd("No se crearon los elementos");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libros = $this->managerLibro->actualizarLibro($request, $id);

        if ($libros) {
            return redirect()->back();
        } else {
            dd("No se pudo realizar la actualizacion");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $libro = $this->managerLibro->eliminarLibro($id);

        if (!$libro) {
            return redirect()->back()->with('error', 'El libro no existe.');
        }

        return redirect()->back()->with('success', 'El libro ha sido eliminado correctamente.');
    }
}

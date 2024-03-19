<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resource\libro\ManagerLibro;

use App\Resource\autor\ManagerAutor;

class LibroApiController extends Controller
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
        return response()->json($this->managerLibro->listarLibro());
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
        return $this->managerLibro->crearLibro($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->managerLibro->verLibro($id);
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
        return $this->managerLibro->actualizarLibro($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->managerLibro->eliminarLibro( $id);
    }
}

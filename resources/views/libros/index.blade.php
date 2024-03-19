@extends('layout.app')
@section('content')
    <h1>Crea un libro </h1>
    <form action="{{ route('guardar') }}" method="post">
        @csrf

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo">

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria">

        <td><label for="fecha_creacion"> Fecha de creación:</label>
            <input type="text" name="fecha_creacion" id="fecha_creacion">
        </td>

        <td><label for="fecha_actualizacion">Fecha de actualización:</label>
            <input type="text" name="fecha_actualizacion" id="fecha_actualizacion">
        </td>

        <button type="submit">Crear</button>
    </form>
    <hr>
    <hr><br>

    <table>
        <tr>
            <th>Id:</th>
            <th>Titulo:</th>
            <th>Categoria:</th>
            <th>Fecha de creación</th>
            <th>Fecha de actualización</th>
            <th></th>
        </tr>

        @foreach ($libro as $librito)
            <form action="{{ route('actualizar', ['id' => $librito->id]) }}" method="post">

                @csrf
                @method('put')
                <tr>
                    <td>{{ $librito->id }}</td>

                    <td>
                        <input type="text" name="titulo" id="titulo" value="{{ $librito->titulo }}">
                    </td>

                    <td>
                        <input type="text" name="categoria" id="categoria" value="{{ $librito->categoria }}">
                    </td>

                    <td>
                        <input type="text" name="fecha_creacion" id="fecha_creacion"
                            value="{{ $librito->fecha_creacion }}">
                    </td>

                    <td>
                        <input type="text" name="fecha_actualizacion" id="fecha_actualizacion"
                            value="{{ $librito->fecha_actualizacion }}">
                    </td>


                    <td><button type="submit">Actualizar</button></td>

            </form>

            <form action="{{ route('eliminar', ['id' => $librito->id]) }}" method="post">
                <td>
                    @csrf
                    @method('delete')

                    <button type="submit">Eliminar</button>
                </td>
            </form>
        </tr>
        @endforeach

    </table>

    <br>
    <hr>
    <hr>
    <hr><br>

    <h1>Crea un autor </h1>

    <form action="{{ route('guardarAutor') }}" method="post">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido">

        <input type="number" name="autor_id" id="autor_id">

        <td><label for="fecha_creacion"> Fecha de creación:</label>
            <input type="text" name="fecha_creacion" id="fecha_creacion">
        </td>

        <td><label for="fecha_actualizacion">Fecha de actualización:</label>
            <input type="text" name="fecha_actualizacion" id="fecha_actualizacion">
        </td>

        <button type="submit">Crear</button>
    </form>
    <br>
    <hr>
    <hr><br>

    <table>
        <tr>
            <th>Id:</th>
            <th>Nombre:</th>
            <th>Apellido:</th>

            <th>Fecha de creación</th>
            <th>Fecha de actualización</th>
            <th></th>
        </tr>

        @foreach ($autor as $autorcitos)
            <form action="{{ route('actualizarAutor', ['id' => $autorcitos->id]) }}" method="post">

                @csrf
                @method('put')
                <tr>
                    <td>{{ $autorcitos->id }}</td>

                    <td>
                        <input type="text" name="nombre" id="nombre" value="{{ $autorcitos->nombre }}">
                    </td>

                    <td>
                        <input type="text" name="apellido" id="apellido" value="{{ $autorcitos->apellido }}">
                    </td>

                    <td>
                        <input type="text" name="fecha_creacion" id="fecha_creacion"
                            value="{{ $autorcitos->fecha_creacion }}">
                    </td>

                    <td>
                        <input type="text" name="fecha_actualizacion" id="fecha_actualizacion"
                            value="{{ $autorcitos->fecha_actualizacion }}">
                    </td>

                    <td><button type="submit">Actualizar</button></td>

            </form>

            <form action="{{ route('eliminarAutor', ['id' => $autorcitos->id]) }}" method="post">
                <td>
                    @csrf
                    @method('delete')

                    <button type="submit">Eliminar</button>
                </td>
            </form>
        </tr>
        @endforeach

    </table>
@endsection

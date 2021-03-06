@extends('layouts.app')

@section('botones')
    @include('ui.iconos')
@endsection

@section('content')
    <h2 class="text-center mb-5">Administra tus recetas</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Titulo</th>
                    <th scole="col">Catgoria</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recetas as $receta)
                    <tr>
                        <td>{{ $receta->titulo }}</td>
                        <td>{{ $receta->categoria->nombre }}</td>
                        <td>
                            <a href="{{ route('recetas.show', ['receta' => $receta->id]) }}" class="btn btn-success mr-1">Ver</a>
                            <a href="{{ route('recetas.edit', ['receta' => $receta->id])}}" class="btn btn-dark mr-1">Editar</a>
                            <eliminar-receta
                                receta-id={{$receta->id}}
                            ></eliminar-receta>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-12 mt-4 justify-content-center d-flex">
            {{ $recetas->links() }}
        </div>
    </div>
@endsection
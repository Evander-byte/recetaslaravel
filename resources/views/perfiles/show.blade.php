@extends('layouts.app')

@section('botones')
    <a href={{ route('recetas.index')}} class="btn btn-outline-primary text-uppercase font-weight-bold">
        <svg class="icono" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
        </svg>
        Volver
    </a>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                @if ($perfil->imagen)
                    <img src="/storage/{{ $perfil->imagen }}" class="w-100 rounded-circle" alt="Imagen Usuario">
                @endif
            </div>
            <div class="col-md-7 mt-5 mt-md-0">
                <h2 class="text-center mb-2 text-primary">{{ $perfil->usuario->name }}</h2>
                <a href="{{ $perfil->usuario->url }}">Visitar Sitio Web</a>
                <div class="biografia">
                    {!! $perfil->biografia !!}
                </div>
            </div>
        </div>
    </div>
@endsection
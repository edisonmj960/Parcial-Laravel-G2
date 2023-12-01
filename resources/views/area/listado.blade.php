@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')
    <div class="row">
        @foreach($ar as $area)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $area->descripcion }}</h5>
                    <p class="card-text">ID de Marca: {{ $area->idArea }}</p>
                    <a href="#" class="btn btn-primary">Detalles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')


    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ISBN</th>
            <th scope="col">nombre</th>
            <th scope="col">descripcion</th>
            <th scope="col">genero literario</th>
            <th scope="col">precio unitario</th>
            <th scope="col">observacion</th>
            <th scope="col">foto</th>
            <th scope="col">area</th>
            
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($li as $l)
            <tr>
            <th scope="row">{{$i}}</th>
                <td>{{$l->ISBN}}</td>
                <td>{{$l->nombre}}</td>
                <td>{{$l->descripcion}}</td>
                <td>{{$l->generoLiterario}}</td>
                <td>{{$l->precioUnitario}}</td>
                <td>{{$l->observacion}}</td>
                <td>{{$l->foto}}</td>
                <td>{{$l->area}}</td>

            @php
                $i =$i +1;
            @endphp
            </tr>
            @endforeach

        </tbody>
    </table>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

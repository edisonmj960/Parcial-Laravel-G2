@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Librería</h1>
@stop

@section('content')
    <p>Esta librería está ubicada en Ipiales y ofrece una amplia selección de libros en diferentes áreas de conocimiento.</p>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Horario de atención</h5>
                    <p class="card-text">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                    <p class="card-text">Sábado: 10:00 AM - 2:00 PM</p>
                    <p class="card-text">Domingo: Cerrado</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contacto</h5>
                    <p class="card-text">Dirección: barrio la floresta</p>
                    <p class="card-text">Teléfono: 3136465306</p>
                    <p class="card-text">Correo Electrónico: info@libreria.com</p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

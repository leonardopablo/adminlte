@extends('adminlte::page')

@section('title', 'RepositorioD')

@section('content_header')
    <h1>AÑADIR ADMINISTRADOR</h1>
@stop

@section('content')
<div class="row">
    <x-adminlte-input name="iLabel" label="Nombre" placeholder="Ingresa el nombre de usuario aquí"
        fgroup-class="col-md-6" />
</div>

<div class="row">
    <x-adminlte-input name="Correo" label="Correo" type="email" placeholder="mail@example.com" fgroup-class="col-md-6" />
</div>

<div class="row">
    <x-adminlte-input type="password" name="iLabel" label="Contraseña" placeholder="Ingrese la contraseña asignada"
        fgroup-class="col-md-6" />
</div>

<div class="row">
    <x-adminlte-input name="Correo" label="Estatus de usuario"  fgroup-class="col-md-6" />
</div>

<x-adminlte-button label="AGREGAR" theme="success" icon="fas fa-thumbs-up"/>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

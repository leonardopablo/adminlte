@extends('adminlte::page')

@section('title', 'RepositorioD')

@section('content_header')
    <h1>AÑADIR ARCHIVO</h1>
@stop

@section('content')
    <x-adminlte-button class="btn-flat" href="/archivoadd"  type="submit" label="Añadir" theme="success" icon="fas fa-lg fa-save"/>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

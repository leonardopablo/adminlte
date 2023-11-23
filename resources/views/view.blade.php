@extends('adminlte::page')

@section('title', 'RepositorioD')

@section('content_header')
    <h1>VER LISTA DE ADMINISTRADORES</h1>
@stop

@section('content')
  
<div class="card">
    <div class="card-body">
        <x-adminlte-datatable id="table1" :heads="$heads">
            @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->name}}</td>
                    <td>{{$event->apellidos}}</td>
                    <td>{{$event->email}}</td>
                    <td>{{$event->contraseña}}</td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

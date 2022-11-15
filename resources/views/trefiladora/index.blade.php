@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-info" href="">Agregar Registro</a>
    </div>
    <div class="card-body  table-responsive">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th># Alambron</th>
                    <th>Producto</th>
                    <th>Diametro</th>
                    <th>Peso(kg)</th>
                    <th>Turno</th>
                    <th>Operador</th>
                    <th>Horas Ocupadas</th>
                    <th>Observaciones</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regtrefilado as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nalambron}}</td>
                        <td>{{$item->producto}}</td>
                        <td>{{$item->kg}}</td>
                        
                        <td>{{$item->diametro}}</td>
                        <td>{{$item->turno}}</td>
                        <td>{{$item->operador}}</td>
                        <td>{{$item->horas}}</td>
                        <td class="">{{$item->opservaciones}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>
                            <a href="" class="btn btn-info btn-block">Editar</a>
                            <a href="" class="btn btn-danger btn-block">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@stop

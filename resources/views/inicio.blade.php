@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registrar</h1>
@stop

@section('content')
    {{-- contenido --}} 
    <div class="container">
        <div class="row">
          <div class="col col-sm col-md-6 col-lg-4 ">
            <a href="{{route('productos.index')}}" class="btn btn-primary btn-lg btn-block mb-3">Trefiladora</a>
          </div>
          <div class="col col-sm col-md-6 col-lg-4 ">
            <a href="" class="btn btn-primary btn-lg btn-block  mb-3">Cableadora</a>
          </div>
          <div class="col col-sm col-md-6 col-lg-4 ">
            <a href="" class="btn btn-primary btn-lg btn-block  mb-3">Extrusoras</a>
          </div>
          <div class="col col-sm col-md-6 col-lg-4 ">
            <a href="" class="btn btn-primary btn-lg btn-block  mb-3">Empaquetadora</a>
          </div>
          <div class="col col-sm col-md-6 col-lg-4 ">
            <a href="" class="btn btn-primary btn-lg btn-block  mb-3">Otros Registros</a>
          </div>
        </div>
      </div>
@stop

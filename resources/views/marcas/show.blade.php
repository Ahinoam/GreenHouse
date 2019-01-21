@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Detalle de la marca</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{$marca->nombre}} </p>
                    <p><strong>Descripcion:</strong>{{$marca->descripcion}}</p>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-footer">
                    <a class="btn btn-primary btn-sm" href="{{route('departamentos.index')}}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

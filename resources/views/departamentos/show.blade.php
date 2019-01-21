@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Datos del departamento</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{$departamento->nombre}} </p>
                    <p><strong>Descripcion:</strong>{{$departamento->descripcion}}</p>
                </div>
                <div class="card text-center">
                    <div class="card-footer">
                        <a class="btn btn-primary btn-sm" href="{{route('departamentos.index')}}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

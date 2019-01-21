@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light">
                <div class="card-header">
                    <h5>Detalle del producto</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <p><strong>Nombre: </strong> {{$producto->nombre}} </p>
                        <p><strong>Descripcion: </strong>{{$producto->descripcion}}</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-footer">
                        <a class="btn btn-primary btn-sm" href="{{route('productos.index')}}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

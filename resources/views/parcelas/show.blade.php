@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light">
                <div class="card-header">
                    <h5>Detalle de la parcela</h5>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <p><strong>Nombre: </strong> {{$parcela->nombre}} </p>
                        <p><strong>Altura: </strong>{{$parcela->altura}}</p>
                        <p><strong>Anchura: </strong>{{$parcela->anchura}}</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-footer">
                        <a class="btn btn-primary btn-sm" href="{{route('parcelas.index')}}">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

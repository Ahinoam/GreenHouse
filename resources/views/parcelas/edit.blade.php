@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light">
                <form method="POST" action="{{route('parcelas.update',['parcela'=>$parcela])}}">
                    @csrf @method('PUT')
                    <div class="card-header">
                        <h5>Datos de la parcela</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required value="{{$parcela->nombre}}">
                        </div>
                        <div class="form-group">
                            <label>Altura</label>
                            <input id="altura" name="altura" type="number" class="form-control" required value="{{$parcela->altura}}">
                        </div>
                        <div class="form-group">
                            <label>Anchura</label>
                            <input id="anchura" name="anchura" type="number" class="form-control" required value="{{$parcela->anchura}}">
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                            <a class="btn btn-secondary btn-sm" href="{{route('parcelas.index')}}">Cancelar</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

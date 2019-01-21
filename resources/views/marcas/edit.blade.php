@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <form method="POST" action="{{route('marcas.update',['marca'=>$marca])}}">
                    @csrf @method('PUT')
                    <div class="card-header"><h5>Datos de la Marca</h5></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required value="{{$marca->nombre}}">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea id="descripcion" name="descripcion" rows=3 class="form-control" required>{{$marca->descripcion}}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a class="btn btn-secondary btn-sm" href="{{route('marcas.index')}}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

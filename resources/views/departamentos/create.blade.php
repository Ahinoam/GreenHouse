@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <form method="POST" action="{{route('departamentos.store')}}">
                    @csrf
                    <div class="card-header">
                        <h5>Crear nuevo departamento</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea id="descripcion" name="descripcion" rows=3 class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a class="btn btn-secondary btn-sm" href="{{route('departamentos.index')}}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

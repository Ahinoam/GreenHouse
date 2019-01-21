@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light">
                <form method="POST" action="{{route('parcelas.store')}}">
                    @csrf
                    <div class="card-header">
                        <h5>Ingresar una nueva parcela</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Altura</label>
                            <textarea id="altura" name="altura" rows=3 class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Anchura</label>
                            <input id="anchura" name="anchura" type="text" class="form-control" required>
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

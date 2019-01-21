@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <form method="POST" action="{{route('direcciones.store')}}">
                    @csrf
                    <div class="card-header">Datos de la direccion</div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $errors)
                                <li>{{$errors}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>Calle</label>
                            <input id="calle" name="calle" type="text" class="form-control" required value="{{old('calle')}}">
                        </div>
                        <div class="form-group">
                            <label>Numero</label>
                            <input id="numero" name="numero" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Colonia</label>
                            <input id="colonia" name="colonia" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Municipio</label>
                            <input id="municipio" name="municipio" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input id="estado" name="estado" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Codigo Postal</label>
                            <input id="cp" name="cp" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                        <a class="btn btn-light btn-sm" href="{{ route('perfil') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

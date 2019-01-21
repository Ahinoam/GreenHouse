@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light">
                <form method="POST" action="{{route('productos.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h5>Datos de la producto</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea id="descripcion" name="descripcion" rows=3 class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Precio</label>
                            <input id="precio" name="precio" type="text" class="form-control" required>
                        </div>
                        <label>Imagen</label>
                        <br>
                        <input id="img" name="img" type="file" required>
                        <br>
                        <br>

                        <div class="form-group">
                            <label>Marca</label>
                            <select id="marca_id" name="marca_id" class="form-control">
                        @foreach($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <label>Departamento</label>
                            <select id="departamento_id" name="departamento_id" class="form-control">
                        @foreach($departamentos as $departamento)
                        <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                        @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="card text-center">
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                            <a class="btn btn-secondary btn-sm" href="{{route('productos.index')}}">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

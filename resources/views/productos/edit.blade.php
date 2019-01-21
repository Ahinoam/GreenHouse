@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light">
                <form method="POST" action="{{route('productos.update',['producto'=>$producto])}}" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="card-header">
                        <h5>Datos del producto</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" required value="{{$producto->nombre}}">
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea id="descripcion" name="descripcion" rows=3 class="form-control" required>{{$producto->descripcion}}</textarea>
                        </div>
                        <!--Imagenes-->
                        <p><label form="img"><input type="file" name="img"{{$producto->img}}></label></p>
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

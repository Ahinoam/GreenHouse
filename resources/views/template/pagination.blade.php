<div class="container">
    <div class="col-md-10">
        <div class="card">
            <div class="card text-white bg-danger">
                <div class="card-header" align="center">
                    <h3>Nuestros Productos</h3>
                </div>
            </div>
            <div class="card border-danger">
                <div class="card-body justify-content-center">
                    <div class="row">
                        @foreach ($productos as $producto)
                        <div class="col-md-4 text-md-center">
                            <br><img style="width: 170px; height: 230px;" src="img/{{$producto->img}}">
                            <br>
                            <h4>{{$producto->nombre}}</h4>
                            <h4>Precio: {{number_format($producto->precio,2)}}</h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

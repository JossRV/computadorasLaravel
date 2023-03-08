@extends('./layouts/plantilla')
@section('contenido')
    <div class="container mt-2">
        <div class="row mb-4">
            <div class="col">
                <div class="display-2 text-center">Agregar nuevo dispositivo</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="VivoBook_ASUS" required autofocus>
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="marca" class="form-control" id="floatingInput" placeholder="Asus" required>
                        <label for="floatingInput">Marca</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="modelo" class="form-control" id="floatingInput" placeholder="X515JA_BQ788T" required>
                        <label for="floatingInput">Modelo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="ram" class="form-control" id="floatingInput" placeholder="12 GB" required>
                        <label for="floatingInput">Ram</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="procesador" class="form-control" id="floatingInput" placeholder="core i5" required>
                        <label for="floatingInput">Procesador</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="disco_duro" class="form-control" id="floatingInput" placeholder="1 TB" required>
                        <label for="floatingInput">Disco duro</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="descripcion" class="form-control" id="floatingTextarea" placeholder="Descripcion del equipo">
                        <label for="floatingTextarea">Descripción</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="url" class="form-control" id="floatingInput" placeholder="htt://img">
                        <label for="floatingInput">Url de imagen</label>
                    </div>
                    <div class="buttons d-flex justify-content-center">
                        <div class="btn-group mb-3">
                            <button class="btn btn-outline-success">Agregar</button>
                            <a href="{{route('inicio')}}" class="btn btn-outline-warning">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
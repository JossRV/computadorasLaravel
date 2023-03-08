@extends('./layouts/plantilla')
@section('contenido')
    <div class="container mt-2">
        <div class="row mb-4">
            <div class="col">
                <div class="display-2 text-center">Editar dispositivo</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('actualizar',$computadora->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="VivoBook_ASUS" required autofocus value="{{$computadora->nombre}}">
                        <label for="floatingInput">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="marca" class="form-control" id="floatingInput" placeholder="Asus" required value="{{$computadora->marca}}">
                        <label for="floatingInput">Marca</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="modelo" class="form-control" id="floatingInput" placeholder="X515JA_BQ788T" required value="{{$computadora->modelo}}">
                        <label for="floatingInput">Modelo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="ram" class="form-control" id="floatingInput" placeholder="12 GB" required value="{{$computadora->ram}}">
                        <label for="floatingInput">Ram</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="procesador" class="form-control" id="floatingInput" placeholder="core i5" required value="{{$computadora->procesador}}">
                        <label for="floatingInput">Procesador</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="disco_duro" class="form-control" id="floatingInput" placeholder="1 TB" required value="{{$computadora->disco_duro}}">
                        <label for="floatingInput">Disco duro</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="descripcion" class="form-control" id="floatingTextarea" placeholder="Descripcion del equipo" value="{{$computadora->descripcion}}">
                        <label for="floatingTextarea">Descripción</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="url" class="form-control" id="floatingInput" placeholder="htt://img" value="{{$computadora->URL_imagen}}">
                        <label for="floatingInput">Url de imagen</label>
                    </div>
                    <div class="buttons d-flex justify-content-center">
                        <div class="btn-group mb-3">
                            <button class="btn btn-outline-warning">Actualizar</button>
                            <a href="{{route('inicio')}}" class="btn btn-outline-success">Regresar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
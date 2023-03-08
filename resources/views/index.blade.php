@extends('./layouts/plantilla')
@section('contenido')
    <div class="container mt-2">
        <div class="row mb-4">
            <div class="col-lg-10 col-sm-12">
                <div class="display-5 text-center">Computadoras</div>
            </div>
            <div class="col-2 d-flex justify-content-center d-lg-block d-none align-self-center">
                <a href="{{route('nuevo')}}" class="btn btn-outline-success">Nuevo equipo</a>
            </div>
        </div>
        <div class="row mb-4 d-lg-none d-md-block d-sm-block">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{route('nuevo')}}" class="btn btn-outline-success">Nuevo equipo</a>
            </div>
        </div>
        <div class="row">
            @foreach ($computadoras as $computadora)
                <div class="col-lg-5 col-md-12 ms-5 mb-5 border border-dark rounded">
                    <div class="row">
                        <div class="col">
                            <div class="display-5 text-center">{{$computadora->nombre}}</div>
                        </div>
                    </div>
                    <div class="row text-center mt-3 mb-3">
                        <div class="col-lg-4 col-md-6 col-sm-12 align-self-center">
                            @if ($computadora->URL_imagen != 'null')
                                <img src="{{$computadora->URL_imagen}}" style="width: 120px" alt="">
                            @else
                                <p>Sin imagen</p>
                            @endif
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="row mb-2">
                                <div class="col text-center">
                                    Especificaciones:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li>{{$computadora->marca}}</li>
                                        <li>{{$computadora->modelo}}</li>
                                        <li>{{$computadora->ram}}</li>
                                    </ul>
                                </div>
                                <div class=" col-md-6 col-sm-12">
                                    <ul>
                                        <li>{{$computadora->procesador}}</li>
                                        <li>{{$computadora->disco_duro}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col">
                            @if ($computadora->descripcion != 'null')
                                <h6 class="text-center">Descripcion:</h6>
                                <p>{{$computadora->descripcion}}</p>
                            @else
                                <h6 class="text-center">Sin descripcion</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <form action="{{route('eliminar',$computadora->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="buttons d-flex justify-content-center">
                                <div class="btn-group">
                                    <a href="{{route('editar',$computadora->id)}}" class="btn btn-outline-warning">Editar</a>
                                    <button class="btn btn-outline-danger">Eliminar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
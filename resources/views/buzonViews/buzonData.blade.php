@extends('layouts.base')
@section('content')

    <center>

        <h1> Sugerencias o inquietudes:  </h1> 
        <a class="btn btn-primary btn-añadir" href="buzon/create">Nuevo sugerencia o inquietud</a>

        @foreach ($allBuzon as $buzon)
            <div id="data">
                <p>{{$buzon -> nombre}}</p>
                <p>{{$buzon -> contacto}}</p>
                <p>{{$buzon -> email}}</p>
                <p>{{$buzon -> direccion}}</p>
                <p>{{$buzon -> residencia}}</p>
                <p>{{$buzon -> sugerencia}}</p>
            </div>

        @endforeach

        

    </center>




@endsection
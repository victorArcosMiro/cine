@extends('master')
@section('title', 'Listado de contactos')
@section('main_title', 'CATALOGO DE PELICULAS')

@section('catalogo')
<table>
    @foreach ($movieList->chunk(3) as $fila)
        <tr>
            @foreach ($fila as $movie)
                <td><a href="{{ route('movie.show',[$movie->id])}}"><img style="height: 500px" id="imagenesPeliculas" src="{{ url('images/' . $movie->image) }}" alt=""></a></td>
            @endforeach
        </tr>
    @endforeach
</table>
@endsection
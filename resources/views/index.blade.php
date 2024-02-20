@extends('master')
@section('title', 'Listado de contactos')
@section('main_title')
    {{$title}}
@endsection
@section('catalogo')
<table>
    @foreach ($movieList->chunk(3) as $fila)
        <tr>
            @foreach ($fila as $movie)
                <td><a href="{{ route('movie.show', [$movie->id]) }}"><img style="height: 500px" id="imagenesPeliculas" src="{{ url('images/' . $movie->image) }}" alt=""></a></td>
            @endforeach
        </tr>
    @endforeach

    @if ($movieList->count() % 3 !== 0)
        <tr>
            @for ($i = 0; $i < 3 - ($movieList->count() % 3); $i++)
                <td></td>
            @endfor
        </tr>
    @endif
</table>
@endsection
<div class="catalogo">
    <h1>CATÁLOGO DE PELÍCULAS</h1>
    <table>
        @foreach ($movieList->chunk(3) as $fila)
            <tr>
                @foreach ($fila as $movie)
                    <td><a href="{{ route('movie.show',[$movie->id])}}"><img id="imagenesPeliculas" src="{{ url('images/' . $movie->image) }}" alt=""></a></td>
                @endforeach
            </tr>
        @endforeach
    </table>


</div>

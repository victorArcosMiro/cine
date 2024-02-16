<div class="catalogo">
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

@extends('master')
@section('catalogo')
    <div class="content_pelicula">
        <h1>{{ $movie->title }}</h1>
        <div class="top">
            <div class="cartel">
                <img style="height: 500px" src="{{ asset('images/' . $movie->image) }}" alt="{{ $movie->title }}">
            </div>
            <div class="info">
                <p><strong>Director:</strong> {{ $movie->director->name }} {{ $movie->director->surname }}</p>

                <p><strong>Actor principal:</strong>{{ $movie->leadActor->name }} {{ $movie->leadActor->surname }}</p>

                <p><strong>Guionistas:</strong>
                    @foreach ($movie->writers as $writer)
                        {{ $writer->name }} {{ $writer->surname }}{{ !$loop->last ? ',' : '' }}
                    @endforeach
                </p>

                <p><strong>Fecha de Estreno:</strong> {{ $movie->release_date }}</p>

                <p><strong>Duración:</strong> {{ $movie->duration }}</p>

                <p><strong>Género:</strong> {{ $movie->genre->genre }}</p>

            </div>
        </div>
        <div class="synopsis">
            <p><strong>Sinopsis:</strong> {{ $movie->synopsis }}</p>
        </div>
    </div>
@endsection

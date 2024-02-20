<nav>
    <img src="{{url('images/itsfree_header.gif')}}" alt="">
    <div class="nav">
       <a style="text-decoration: none; color:black" href="{{route('movie.index')}}"><h1>PELÍCULAS ONLINE</h1></a>

        <div class="botones">
            <a style="text-decoration: none" href="{{route('movie.showNovedades')}}"><div class="boton">Últimas novedades</div></a>
            <a style="text-decoration: none" href="{{route('movie.showEstrenos')}}"><div class="boton">Próximos estrenos</div></a>
        </div>

        <div class="inputs">
           <form action="{{ route('movie.buscarPeliculaTitulo') }}" method="GET">
                <label for="titulo">titulo:</label>
                <div class="input">
                    <input type="text" name="titulo" id="titulo">

                    <button style="background-color: gray;all: unset;" type="submit"> <img src="{{url('images/lupa.png')}}" alt="" class="lupa"></button>
                </div>
            </form>

            <form action="{{ route('movie.buscarPeliculaDirector') }}" method="get">
                <label for="director">director:</label>
                <div class="input">
                    <input type="text" name="director" id="director">
                    <button style="background-color: gray;all: unset;" type="submit"> <img src="{{url('images/lupa.png')}}" alt="" class="lupa"></button>
                </div>
            </form>

            <label for="genero">género:</label>
            <div class="botones_generos">
                <a href="{{ route('movie.genero', 'Accion') }}" style="text-decoration: none">
                    <div class="boton_genero">Acción</div>
                </a>

                <a href="{{ route('movie.genero', 'Aventura') }}" style="text-decoration: none">
                    <div class="boton_genero">Aventura</div>
                </a>

                <a href="{{ route('movie.genero', 'Ciencia-ficcion') }}" style="text-decoration: none">
                    <div class="boton_genero">Ciencia ficción</div>
                </a>

                <a href="{{ route('movie.genero', 'Comedia') }}" style="text-decoration: none">
                    <div class="boton_genero">Comedia</div>
                </a>

                <a href="{{ route('movie.genero', 'Drama') }}" style="text-decoration: none">
                    <div class="boton_genero">Drama</div>
                </a>

                <a href="{{ route('movie.genero', 'Historia') }}" style="text-decoration: none">
                    <div class="boton_genero">Historia</div>
                </a>

                <a href="{{ route('movie.genero', 'Fantasia') }}" style="text-decoration: none">
                    <div class="boton_genero">Fantasía</div>
                </a>

                <a href="{{ route('movie.genero', 'Animacion') }}" style="text-decoration: none">
                    <div class="boton_genero">Animación</div>
                </a>

                <a href="{{ route('movie.genero', 'Romance') }}" style="text-decoration: none">
                    <div class="boton_genero">Romance</div>
                </a>

                <a href="{{ route('movie.genero', 'Terror') }}" style="text-decoration: none">
                    <div class="boton_genero">Terror</div>
                </a>

            </div>
        </div>
    </div>
</nav>
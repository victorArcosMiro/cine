<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <div class="container">
        <!-- Mitad Izquierda - Nav -->
        @include('nav')

        <!-- Mitad Derecha - Main -->
        <main>
        <h1>@yield('main_title')</h1>

            @yield('catalogo')
            <!-- Tu contenido principal va aquí -->
        </main>

    </div>

</body>
</html>

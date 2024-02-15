<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

    <div class="container">
        <!-- Mitad Izquierda - Nav -->
        @include('nav')

        <!-- Mitad Derecha - Main -->
        <main>
            @yield('catalogo')
            <!-- Tu contenido principal va aquí -->
        </main>

    </div>

</body>
</html>

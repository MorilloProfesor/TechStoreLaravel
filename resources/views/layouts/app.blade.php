<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>

    <!-- ========================================= -->
    <!-- ENCABEZADO -->
    <!-- ========================================= -->
    <header>
        <div class="logo">
            <div id="logo">
                <img src="{{ asset('img/TechStore.png') }}" alt="Logo TechStore">
            </div>
            <div>
                <h1>TechStore</h1>
                <p>Tecnología para todos</p>
            </div>
        </div>

        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                <li><a href="{{ url('/productos') }}">Productos</a></li>
                <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                <li><a href="{{ url('/conversion') }}">Conversión</a></li>
            </ul>
        </nav>
    </header>

    <!-- ========================================= -->
    <!-- BANNER (si es común en todas las vistas) -->
    <!-- ========================================= -->
    <section id="banner">
        <img src="{{ asset('img/banner.png') }}" alt="Banner principal" width="100%">
    </section>

    <!-- ========================================= -->
    <!-- CONTENIDO -->
    <!-- ========================================= -->
    <main>
        @yield('content')
    </main>

    <!-- ========================================= -->
    <!-- PIE DE PAGINA -->
    <!-- ========================================= -->
    <footer>
        <hr>
        <p>© 2026 TechStore. Todos los derechos reservados.</p>
        <p>Santo Domingo, República Dominicana</p>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

    @yield('scripts')
</body>

</html>
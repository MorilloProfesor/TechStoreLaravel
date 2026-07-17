<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TechStoreLaravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 min-h-screen">

    <!-- ========================= -->
    <!-- Encabezado -->
    <!-- ========================= -->

    <header class="bg-blue-700 text-white shadow">

        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

            <div>
              
               <h1 class="text-3xl font-bold">
                    TechStoreLaravel
                </h1>

                <p class="text-sm">
                    Plataforma tecnológica desarrollada con Laravel
                </p>

            </div>

            <nav class="space-x-3">

                @if (Route::has('login'))

                @auth

                <a href="{{ route('dashboard') }}"
                    class="bg-white text-blue-700 px-4 py-2 rounded-md font-semibold">

                    Ir al Panel

                </a>

                @else

                <a href="{{ route('login') }}"
                    class="border border-white px-4 py-2 rounded-md hover:bg-white hover:text-blue-700">

                    Iniciar sesión

                </a>

                @if(Route::has('register'))

                <a href="{{ route('register') }}"
                    class="bg-yellow-400 text-black px-4 py-2 rounded-md font-semibold">

                    Registrarse

                </a>

                @endif

                @endauth

                @endif

            </nav>

        </div>

    </header>

    <!-- ========================= -->
    <!-- Hero -->
    <!-- ========================= -->

    <section class="max-w-6xl mx-auto text-center py-16 px-6">

        <h2 class="text-5xl font-bold text-blue-700 mb-6">

            Bienvenido a TechStoreLaravel

        </h2>

        <p class="text-xl text-gray-700">

            Sistema desarrollado con Laravel para administrar clientes,
            productos, categorías, proveedores y pedidos mediante una
            arquitectura MVC y autenticación segura con Laravel Breeze.

        </p>

    </section>

    <!-- ========================= -->
    <!-- Información -->
    <!-- ========================= -->

    <section class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-6">

        <article class="bg-white rounded-lg shadow p-6">

            <h3 class="text-xl font-semibold mb-3">

                Gestión de Productos

            </h3>

            <p>

                Administre el catálogo tecnológico, inventario,
                categorías y proveedores.

            </p>

        </article>

        <article class="bg-white rounded-lg shadow p-6">

            <h3 class="text-xl font-semibold mb-3">

                Administración de Clientes

            </h3>

            <p>

                Registre clientes, gestione pedidos y mantenga el
                historial de operaciones.

            </p>

        </article>

        <article class="bg-white rounded-lg shadow p-6">

            <h3 class="text-xl font-semibold mb-3">

                Panel Administrativo

            </h3>

            <p>

                Acceda mediante autenticación segura para administrar
                toda la información del sistema.

            </p>

        </article>

    </section>

    <!-- ========================= -->
    <!-- Llamado a la acción -->
    <!-- ========================= -->

    <section class="max-w-5xl mx-auto text-center py-16 px-6">

        <h2 class="text-3xl font-bold text-blue-700 mb-4">

            ¿Desea administrar TechStore?

        </h2>

        <p class="text-gray-700 mb-8">

            Inicie sesión para acceder al panel administrativo o cree una
            nueva cuenta si aún no dispone de credenciales.

        </p>

        @guest

        <a href="{{ route('login') }}"
            class="bg-blue-700 text-white px-6 py-3 rounded-md">

            Acceder al sistema

        </a>

        @else

        <a href="{{ route('dashboard') }}"
            class="bg-green-600 text-white px-6 py-3 rounded-md">

            Ir al Panel Administrativo

        </a>

        @endguest

    </section>

    <!-- ========================= -->
    <!-- Pie de página -->
    <!-- ========================= -->

    <footer class="bg-gray-800 text-white text-center py-6 mt-10">

        <p>

            TechStoreLaravel © {{ date('Y') }}

        </p>

        <p class="text-sm text-gray-300">

            Proyecto académico desarrollado con Laravel Breeze.

        </p>

    </footer>

</body>

</html>
<x-app-layout>

    <x-slot name="header">
        <div>
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Panel Administrativo
            </h2>

            <p class="text-sm text-gray-600 mt-1">
                Bienvenido al sistema de gestión de TechStoreLaravel.
            </p>
        </div>
    </x-slot>

    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Bienvenida -->

            <div class="bg-white shadow rounded-lg p-6 mb-8">

                <h3 class="text-2xl font-bold text-blue-700 mb-2">

                    Bienvenido, {{ Auth::user()->name }}

                </h3>

                <p class="text-gray-600">

                    Desde este panel podrá administrar la información principal de
                    TechStoreLaravel. En las próximas actividades se incorporarán
                    los diferentes módulos administrativos del sistema.

                </p>

            </div>

            <!-- Módulos del sistema -->

            <h3 class="text-xl font-semibold text-gray-700 mb-5">

                Módulos administrativos

            </h3>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white shadow rounded-lg p-6">

                    <!-- Imagen -->

                    <h4 class="text-lg font-bold text-blue-700 mb-3">

                        Categorías

                    </h4>

                    <p class="text-gray-600">

                        Administración de las categorías que organizan el catálogo
                        de productos.

                    </p>

                    <p class="mt-4 text-sm text-gray-500 italic">

                        Disponible en la siguiente etapa.

                    </p>

                </div>

                <a href="{{ route('categorias.index') }}"
                    class="block bg-white shadow rounded-lg p-6 hover:shadow-xl hover:bg-blue-50 transition duration-300">

                    <!-- Imagen -->

                    <h4 class="text-lg font-bold text-blue-700 mb-3">

                        Categorías

                    </h4>

                    <p class="text-gray-600">

                        Administración de las categorías que organizan el catálogo
                        de productos.

                    </p>

                    <div class="mt-5">

                        <span class="inline-block bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">

                            Disponible

                        </span>

                    </div>

                </a>

                <div class="bg-white shadow rounded-lg p-6">

                    <!-- Imagen -->

                    <h4 class="text-lg font-bold text-blue-700 mb-3">

                        Proveedores

                    </h4>

                    <p class="text-gray-600">

                        Registro y administración de los proveedores que abastecen
                        la tienda.

                    </p>

                    <p class="mt-4 text-sm text-gray-500 italic">

                        Disponible en la siguiente etapa.

                    </p>

                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    <!-- Imagen -->

                    <h4 class="text-lg font-bold text-blue-700 mb-3">

                        Clientes

                    </h4>

                    <p class="text-gray-600">

                        Administración de clientes y consulta de su historial de
                        compras.

                    </p>

                    <p class="mt-4 text-sm text-gray-500 italic">

                        Disponible en la siguiente etapa.

                    </p>

                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    <!-- Imagen -->

                    <h4 class="text-lg font-bold text-blue-700 mb-3">

                        Pedidos

                    </h4>

                    <p class="text-gray-600">

                        Gestión de órdenes de compra, estados y seguimiento de
                        pedidos.

                    </p>

                    <p class="mt-4 text-sm text-gray-500 italic">

                        Disponible en la siguiente etapa.

                    </p>

                </div>

                <div class="bg-white shadow rounded-lg p-6">

                    <!-- Imagen -->

                    <h4 class="text-lg font-bold text-blue-700 mb-3">

                        Reportes

                    </h4>

                    <p class="text-gray-600">

                        Consultas e informes que permitirán analizar la información
                        registrada en el sistema.

                    </p>

                    <p class="mt-4 text-sm text-gray-500 italic">

                        Disponible en futuras etapas.

                    </p>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
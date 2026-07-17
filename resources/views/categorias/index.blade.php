<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <h2 class="font-semibold text-2xl text-gray-800">

                Gestión de Categorías

            </h2>

            <a href="{{ route('categorias.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">

                Nueva Categoría

            </a>

        </div>

    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))

                <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded mb-6">

                    {{ session('success') }}

                </div>

            @endif

            <div class="bg-white shadow rounded-lg overflow-hidden">

                <table class="min-w-full">

                    <thead class="bg-gray-100">

                        <tr>

                            <th class="px-6 py-3 text-left">ID</th>

                            <th class="px-6 py-3 text-left">Nombre</th>

                            <th class="px-6 py-3 text-left">Descripción</th>

                            <th class="px-6 py-3 text-center">Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($categorias as $categoria)

                            <tr class="border-b">

                                <td class="px-6 py-4">

                                    {{ $categoria->id }}

                                </td>

                                <td class="px-6 py-4">

                                    {{ $categoria->nombre }}

                                </td>

                                <td class="px-6 py-4">

                                    {{ $categoria->descripcion }}

                                </td>

                                <td class="px-6 py-4 text-center space-x-2">

                                    <a href="{{ route('categorias.edit',$categoria) }}"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">

                                        Editar

                                    </a>

                                    <form action="{{ route('categorias.destroy',$categoria) }}"
                                        method="POST"
                                        class="inline">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            onclick="return confirm('¿Desea eliminar esta categoría?')"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">

                                            Eliminar

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4"
                                    class="text-center py-8 text-gray-500">

                                    No existen categorías registradas.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-app-layout>
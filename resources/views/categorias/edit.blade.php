<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">

                Editar Categoría

            </h2>

            <a href="{{ route('categorias.index') }}"
                class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded shadow">

                Volver

            </a>

        </div>

    </x-slot>

    <div class="py-8">

        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-8">

                @if ($errors->any())

                    <div class="mb-6 bg-red-100 border border-red-300 text-red-700 p-4 rounded">

                        <strong>Se encontraron errores:</strong>

                        <ul class="list-disc ml-6 mt-2">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <form action="{{ route('categorias.update', $categoria) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <!-- Nombre -->

                    <div class="mb-6">

                        <label for="nombre"
                            class="block text-sm font-medium text-gray-700 mb-2">

                            Nombre de la categoría

                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            value="{{ old('nombre', $categoria->nombre) }}"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">

                    </div>

                    <!-- Descripción -->

                    <div class="mb-8">

                        <label for="descripcion"
                            class="block text-sm font-medium text-gray-700 mb-2">

                            Descripción

                        </label>

                        <textarea
                            id="descripcion"
                            name="descripcion"
                            rows="5"
                            class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('descripcion', $categoria->descripcion) }}</textarea>

                    </div>

                    <div class="flex justify-end gap-3">

                        <a href="{{ route('categorias.index') }}"
                            class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded">

                            Cancelar

                        </a>

                        <button
                            type="submit"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-5 py-2 rounded shadow">

                            Actualizar Categoría

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>
<section class="space-y-6">

    <header>

        <h2 class="text-lg font-semibold text-red-700">
            Eliminar Cuenta
        </h2>

        <p class="mt-2 text-sm text-gray-600">
            Esta acción eliminará permanentemente su cuenta de
            TechStoreLaravel junto con toda la información asociada.
            Antes de continuar, asegúrese de que no necesita conservar
            los datos almacenados en el sistema.
        </p>

    </header>

    <!-- Botón para abrir la ventana de confirmación -->

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">

        Eliminar cuenta

    </x-danger-button>

    <!-- Ventana modal -->

    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable>

        <form method="POST"
              action="{{ route('profile.destroy') }}"
              class="p-6">

            @csrf
            @method('DELETE')

            <h2 class="text-lg font-semibold text-gray-900">

                ¿Está seguro de eliminar su cuenta?

            </h2>

            <p class="mt-2 text-sm text-gray-600">

                Esta operación es irreversible. Todos los datos asociados
                a su cuenta serán eliminados permanentemente.

                Para confirmar esta acción, escriba su contraseña.

            </p>

            <!-- Contraseña -->

            <div class="mt-6">

                <x-input-label
                    for="password"
                    value="Contraseña"
                    class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Contraseña" />

                <x-input-error
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2" />

            </div>

            <!-- Botones -->

            <div class="mt-6 flex justify-end">

                <x-secondary-button
                    x-on:click="$dispatch('close')">

                    Cancelar

                </x-secondary-button>

                <x-danger-button class="ms-3">

                    Eliminar cuenta

                </x-danger-button>

            </div>

        </form>

    </x-modal>

</section>
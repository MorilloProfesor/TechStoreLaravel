<section>

    <header>

        <h2 class="text-lg font-semibold text-blue-700">
            Cambiar Contraseña
        </h2>

        <p class="mt-2 text-sm text-gray-600">
            Mantenga protegida su cuenta utilizando una contraseña segura.
            Se recomienda emplear una combinación de letras mayúsculas,
            minúsculas, números y caracteres especiales.
        </p>

    </header>

    <form method="POST"
          action="{{ route('password.update') }}"
          class="mt-6 space-y-6">

        @csrf
        @method('PUT')

        <!-- Contraseña actual -->

        <div>

            <x-input-label
                for="update_password_current_password"
                :value="'Contraseña actual'" />

            <x-text-input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="mt-1 block w-full"
                autocomplete="current-password" />

            <x-input-error
                :messages="$errors->updatePassword->get('current_password')"
                class="mt-2" />

        </div>

        <!-- Nueva contraseña -->

        <div>

            <x-input-label
                for="update_password_password"
                :value="'Nueva contraseña'" />

            <x-text-input
                id="update_password_password"
                name="password"
                type="password"
                class="mt-1 block w-full"
                autocomplete="new-password" />

            <x-input-error
                :messages="$errors->updatePassword->get('password')"
                class="mt-2" />

        </div>

        <!-- Confirmar contraseña -->

        <div>

            <x-input-label
                for="update_password_password_confirmation"
                :value="'Confirmar nueva contraseña'" />

            <x-text-input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="mt-1 block w-full"
                autocomplete="new-password" />

            <x-input-error
                :messages="$errors->updatePassword->get('password_confirmation')"
                class="mt-2" />

        </div>

        <!-- Botón -->

        <div class="flex items-center gap-4">

            <x-primary-button>

                Actualizar contraseña

            </x-primary-button>

            @if (session('status') === 'password-updated')

                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600">

                    La contraseña se actualizó correctamente.

                </p>

            @endif

        </div>

    </form>

</section>
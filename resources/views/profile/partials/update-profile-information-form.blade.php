<section>

    <header>

        <h2 class="text-lg font-semibold text-blue-700">
            Información del Perfil
        </h2>

        <p class="mt-2 text-sm text-gray-600">
            Actualice la información personal asociada a su cuenta de
            TechStoreLaravel. Los cambios realizados se reflejarán en su
            perfil de usuario dentro del sistema.
        </p>

    </header>

    <!-- Formulario para reenviar la verificación del correo -->
    <form id="send-verification"
          method="POST"
          action="{{ route('verification.send') }}">

        @csrf

    </form>

    <!-- Formulario principal -->

    <form method="POST"
          action="{{ route('profile.update') }}"
          class="mt-6 space-y-6">

        @csrf
        @method('PATCH')

        <!-- Nombre -->

        <div>

            <x-input-label
                for="name"
                :value="'Nombre completo'" />

            <x-text-input
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full"
                :value="old('name', $user->name)"
                required
                autofocus
                autocomplete="name" />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')" />

        </div>

        <!-- Correo electrónico -->

        <div>

            <x-input-label
                for="email"
                :value="'Correo electrónico'" />

            <x-text-input
                id="email"
                name="email"
                type="email"
                class="mt-1 block w-full"
                :value="old('email', $user->email)"
                required
                autocomplete="username" />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())

                <div class="mt-3">

                    <p class="text-sm text-gray-700">

                        Su dirección de correo electrónico aún no ha sido verificada.

                        <button
                            form="send-verification"
                            class="underline text-blue-700 hover:text-blue-900">

                            Haga clic aquí para reenviar el correo de verificación.

                        </button>

                    </p>

                    @if (session('status') === 'verification-link-sent')

                        <p class="mt-2 text-sm font-medium text-green-600">

                            Se ha enviado un nuevo enlace de verificación a su correo electrónico.

                        </p>

                    @endif

                </div>

            @endif

        </div>

        <!-- Botón -->

        <div class="flex items-center gap-4">

            <x-primary-button>

                Guardar cambios

            </x-primary-button>

            @if (session('status') === 'profile-updated')

                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600">

                    Información actualizada correctamente.

                </p>

            @endif

        </div>

    </form>

</section>

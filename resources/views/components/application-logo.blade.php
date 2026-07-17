<div {{ $attributes->merge(['class' => 'flex items-center space-x-2']) }}>

    <!-- Logo con imagen -->
    <div class="w-10 h-10 rounded-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('img/logo-techstore.png') }}" alt="Logo TechStore" class="w-full h-full object-cover">
    </div>

    <!-- Texto al lado del logo -->
    <div>
        <div class="text-lg font-bold text-blue-700 leading-none">
            TechStore
        </div>
        <div class="text-xs text-gray-500">
            Laravel
        </div>
    </div>

</div>

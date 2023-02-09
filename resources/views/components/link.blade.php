@php
    $classes = "text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" 
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>  {{-- es una variable que existe en los componentes de laravel, y el href lo va a detectar como un atributo porque existe en HTML. El merge va a unir todos los atributos que pasemos --}}
    {{ $slot }}
</a>
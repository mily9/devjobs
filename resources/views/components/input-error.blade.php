@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'bg-red-100 border-l-4 text-sm border-red-600 text-red-600 font-bold p-2 dark:text-red-400']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif

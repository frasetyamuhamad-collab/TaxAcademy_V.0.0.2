@props(['name'])

@php
    $paths = [
        'moon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 15.03A9.72 9.72 0 0 1 18 15.75 9.75 9.75 0 0 1 8.25 6c0-1.33.27-2.6.76-3.75A9.75 9.75 0 1 0 21.75 15.03Z" />',
        'menu' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />',
        'chart' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.5h2.25V21H3v-7.5Zm6.75-6h2.25V21H9.75V7.5ZM16.5 3h2.25v18H16.5V3Z" />',
        'book' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75c-2.25-1.5-5.25-1.5-7.5 0v12c2.25-1.5 5.25-1.5 7.5 0m0-12c2.25-1.5 5.25-1.5 7.5 0v12c-2.25-1.5-5.25-1.5-7.5 0m0-12v12" />',
        'play' => '<path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.65c0-1.02 1.12-1.65 2-1.11l11.1 6.85a1.3 1.3 0 0 1 0 2.22l-11.1 6.85c-.88.54-2-.09-2-1.11V5.65Z" />',
        'card' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5m-18 9h16.5A1.5 1.5 0 0 0 21.75 15V6A1.5 1.5 0 0 0 20.25 4.5H3.75A1.5 1.5 0 0 0 2.25 6v9a1.5 1.5 0 0 0 1.5 1.5Z" />',
        'user' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 7.5a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0" />',
        'check' => '<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 4.5 4.5 10.5-10.5" />',
        'search' => '<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35m0 0A7.5 7.5 0 1 0 6.04 6.04a7.5 7.5 0 0 0 10.61 10.61Z" />',
        'arrow' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />',
        'message' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3.75h5.25M21 12a8.25 8.25 0 0 1-12.39 7.14L3 20.25l1.11-5.61A8.25 8.25 0 1 1 21 12Z" />',
        'settings' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h3m-6 6h9m-12 6h15M6.75 6a1.5 1.5 0 1 0 0 .01M17.25 18a1.5 1.5 0 1 0 0 .01" />',
    ];
@endphp

<svg {{ $attributes->merge(['class' => 'size-5']) }} fill="none" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" aria-hidden="true">
    {!! $paths[$name] ?? $paths['check'] !!}
</svg>

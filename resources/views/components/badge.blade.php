@props(['tone' => 'blue'])

@php
    $tones = [
        'blue' => 'bg-brand-50 text-brand-700 dark:bg-brand-500/10 dark:text-brand-100',
        'green' => 'bg-green-50 text-green-700 dark:bg-green-500/10 dark:text-green-200',
        'slate' => 'bg-slate-100 text-slate-700 dark:bg-slate-800 dark:text-slate-200',
        'red' => 'bg-red-50 text-red-700 dark:bg-red-500/10 dark:text-red-200',
    ];
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold '.($tones[$tone] ?? $tones['blue'])]) }}>
    {{ $slot }}
</span>

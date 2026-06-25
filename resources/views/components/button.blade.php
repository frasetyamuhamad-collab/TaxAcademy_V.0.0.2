@props(['href' => null, 'variant' => 'primary', 'size' => 'md'])

@php
    $base = 'focus-ring inline-flex items-center justify-center gap-2 rounded-lg font-semibold transition';
    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-5 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];
    $variants = [
        'primary' => 'bg-brand-700 text-white hover:bg-brand-600',
        'secondary' => 'border border-slate-200 bg-white text-slate-800 hover:bg-slate-50 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100 dark:hover:bg-slate-800',
        'ghost' => 'text-slate-700 hover:bg-slate-100 dark:text-slate-200 dark:hover:bg-slate-800',
    ];
    $class = $base.' '.($sizes[$size] ?? $sizes['md']).' '.($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</a>
@else
    <button type="{{ $attributes->get('type', 'button') }}" {{ $attributes->except('type')->merge(['class' => $class]) }}>{{ $slot }}</button>
@endif

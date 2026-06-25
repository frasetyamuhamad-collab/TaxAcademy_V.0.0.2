@props(['value' => 0, 'label' => null])

@php
    $widths = [
        0 => 'w-0',
        15 => 'w-[15%]',
        25 => 'w-1/4',
        35 => 'w-[35%]',
        45 => 'w-[45%]',
        50 => 'w-1/2',
        62 => 'w-[62%]',
        68 => 'w-[68%]',
        72 => 'w-[72%]',
        84 => 'w-[84%]',
        100 => 'w-full',
    ];
    $barWidth = $widths[$value] ?? 'w-1/2';
@endphp

<div>
    @if ($label)
        <div class="mb-2 flex items-center justify-between text-sm">
            <span class="font-medium text-slate-700 dark:text-slate-200">{{ $label }}</span>
            <span class="text-slate-500 dark:text-slate-400">{{ $value }}%</span>
        </div>
    @endif
    <div class="h-2.5 overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
        <div class="h-full rounded-full bg-brand-700 {{ $barWidth }}"></div>
    </div>
</div>

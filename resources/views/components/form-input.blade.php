@props(['label', 'name', 'type' => 'text', 'hint' => null])

<label class="block">
    <span class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">{{ $label }}</span>
    <input name="{{ $name }}" type="{{ $type }}" {{ $attributes->merge(['class' => 'focus-ring w-full rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 placeholder:text-slate-400 dark:border-slate-700 dark:bg-slate-900 dark:text-white']) }}>
    @if ($hint)
        <span class="mt-2 block text-xs text-slate-500 dark:text-slate-400">{{ $hint }}</span>
    @endif
</label>

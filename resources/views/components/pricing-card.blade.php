@props(['plan', 'interactive' => false])

<x-card class="flex h-full flex-col p-6 {{ !empty($plan['popular']) ? 'ring-2 ring-brand-700' : '' }}">
    <div class="flex items-start justify-between gap-4">
        <div>
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">{{ $plan['name'] }}</h3>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $plan['access'] }}</p>
        </div>
        @if (!empty($plan['popular']))
            <x-badge>Popular</x-badge>
        @endif
    </div>
    <div class="mt-6">
        <span class="text-3xl font-bold text-slate-950 dark:text-white">{{ $plan['price'] }}</span>
        <span class="text-sm text-slate-500 dark:text-slate-400">/paket</span>
    </div>
    <ul class="mt-6 flex-1 space-y-3">
        @foreach ($plan['features'] as $feature)
            <li class="flex gap-3 text-sm text-slate-600 dark:text-slate-300">
                <x-icon name="check" class="mt-0.5 size-4 shrink-0 text-green-600" />
                {{ $feature }}
            </li>
        @endforeach
    </ul>
    @if ($interactive)
        <x-button wire:click="subscribe({{ $plan['id'] }})" class="mt-6 w-full" :variant="!empty($plan['popular']) ? 'primary' : 'secondary'">Pilih Paket</x-button>
    @else
        <x-button href="{{ auth()->check() ? route('subscription') : route('register') }}" class="mt-6 w-full" :variant="!empty($plan['popular']) ? 'primary' : 'secondary'">Pilih Paket</x-button>
    @endif
</x-card>

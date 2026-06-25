@props(['training'])

<x-card class="overflow-hidden">
    <div class="aspect-video bg-gradient-to-br from-brand-700 via-sky-500 to-emerald-400 p-5 text-white">
        <div class="flex h-full flex-col justify-between">
            <x-badge tone="slate" class="bg-white/20 text-white">{{ $training['category'] }}</x-badge>
            <div>
                <p class="text-xs font-medium text-white/80">{{ $training['duration'] }} • {{ $training['lessons'] }} lesson</p>
                <h3 class="mt-2 text-lg font-semibold leading-tight">{{ $training['title'] }}</h3>
            </div>
        </div>
    </div>
    <div class="p-5">
        <p class="line-clamp-2 text-sm text-slate-600 dark:text-slate-300">{{ $training['description'] }}</p>
        <div class="mt-5 flex items-center justify-between">
            <span class="text-sm text-slate-500 dark:text-slate-400">{{ $training['instructor'] }}</span>
            <x-button href="{{ route('training.show', $training['slug']) }}" variant="secondary" size="sm">Detail</x-button>
        </div>
    </div>
</x-card>

<section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="grid gap-8 lg:grid-cols-[1.1fr_.9fr]">
        <div>
            <div class="aspect-video rounded-lg bg-gradient-to-br from-brand-700 via-sky-500 to-emerald-400 p-8 text-white">
                <div class="flex h-full flex-col justify-between">
                    <x-badge tone="slate" class="bg-white/20 text-white">{{ $training['category'] }}</x-badge>
                    <div>
                        <p class="text-sm text-white/80">{{ $training['duration'] }} • {{ $training['lessons'] }} lessons</p>
                        <h1 class="mt-3 max-w-2xl text-3xl font-bold sm:text-4xl">{{ $training['title'] }}</h1>
                    </div>
                </div>
            </div>
            <div class="mt-6 grid gap-4 sm:grid-cols-3">
                <x-card class="p-4"><p class="text-sm text-slate-500">Duration</p><p class="mt-1 font-semibold">{{ $training['duration'] }}</p></x-card>
                <x-card class="p-4"><p class="text-sm text-slate-500">Instructor</p><p class="mt-1 font-semibold">{{ $training['instructor'] }}</p></x-card>
                <x-card class="p-4"><p class="text-sm text-slate-500">Lesson Count</p><p class="mt-1 font-semibold">{{ $training['lessons'] }}</p></x-card>
            </div>
        </div>
        <x-card class="p-6">
            <x-badge>{{ $training['category'] }}</x-badge>
            <h2 class="mt-4 text-2xl font-bold text-slate-950 dark:text-white">Ringkasan Training</h2>
            <p class="mt-4 leading-7 text-slate-600 dark:text-slate-300">{{ $training['description'] }}</p>
            <div class="mt-6 space-y-3">
                <x-button href="{{ route('learning') }}" class="w-full">Start Learning</x-button>
                <x-button href="{{ route('subscription') }}" variant="secondary" class="w-full">Subscribe Now</x-button>
            </div>
        </x-card>
    </div>

    <div class="mt-12">
        <h2 class="text-xl font-bold text-slate-950 dark:text-white">Recommended Training</h2>
        <div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($recommended as $item)
                <x-training-card :training="$item" />
            @endforeach
        </div>
    </div>
</section>

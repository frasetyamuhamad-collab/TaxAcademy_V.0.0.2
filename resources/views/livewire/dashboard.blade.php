<section class="lg:pl-72">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid gap-5 lg:grid-cols-[1fr_360px]">
            <x-card class="p-6">
                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-center">
                    <div>
                        <x-badge tone="green">{{ $user->membership_status }} Member</x-badge>
                        <h1 class="mt-4 text-3xl font-bold text-slate-950 dark:text-white">Selamat datang, {{ $user->name }}.</h1>
                        <p class="mt-2 text-slate-600 dark:text-slate-300">Lanjutkan training terakhir dan pantau perkembangan belajar kamu.</p>
                    </div>
                    <x-button href="{{ route('learning') }}">Continue Learning</x-button>
                </div>
            </x-card>

            <x-card class="p-6">
                <p class="text-sm text-slate-500 dark:text-slate-400">Overall Progress</p>
                <p class="mt-2 text-4xl font-bold text-slate-950 dark:text-white">68%</p>
                <div class="mt-5"><x-progress-bar :value="68" label="Monthly target" /></div>
            </x-card>
        </div>

        <div class="mt-5 grid gap-5 sm:grid-cols-3">
            @foreach ([['Total Training', count($trainings)], ['Completed', $completed], ['In Progress', $inProgress]] as $summary)
                <x-card class="p-5">
                    <p class="text-sm text-slate-500 dark:text-slate-400">{{ $summary[0] }}</p>
                    <p class="mt-2 text-3xl font-bold text-slate-950 dark:text-white">{{ $summary[1] }}</p>
                </x-card>
            @endforeach
        </div>

        <div class="mt-5 grid gap-5 lg:grid-cols-[1fr_360px]">
            <x-card class="p-6">
                <div class="mb-5 flex items-center justify-between">
                    <h2 class="text-xl font-bold text-slate-950 dark:text-white">Continue Learning</h2>
                    <x-badge>Last lesson</x-badge>
                </div>
                @php($current = $trainings[0])
                <div class="grid gap-5 md:grid-cols-[240px_1fr]">
                    <div class="aspect-video rounded-lg bg-gradient-to-br from-brand-700 to-emerald-400"></div>
                    <div>
                        <h3 class="text-lg font-semibold text-slate-950 dark:text-white">{{ $current['title'] }}</h3>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">{{ $current['description'] }}</p>
                        <div class="mt-5"><x-progress-bar :value="$current['progress']" label="Progress" /></div>
                        <x-button href="{{ route('learning') }}" class="mt-5">Lanjutkan</x-button>
                    </div>
                </div>
            </x-card>

            <x-card class="p-6">
                <h2 class="text-xl font-bold text-slate-950 dark:text-white">Progress Chart</h2>
                <div class="mt-6 flex h-56 items-end gap-3">
                    @foreach ([35, 50, 45, 62, 72, 84] as $bar)
                        <div class="flex flex-1 flex-col items-center gap-2">
                            <div class="w-full rounded-t-lg bg-brand-700 {{ [35 => 'h-[35%]', 50 => 'h-1/2', 45 => 'h-[45%]', 62 => 'h-[62%]', 72 => 'h-[72%]', 84 => 'h-[84%]'][$bar] }}"></div>
                            <span class="text-xs text-slate-500">{{ $bar }}%</span>
                        </div>
                    @endforeach
                </div>
            </x-card>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-bold text-slate-950 dark:text-white">Recommended Training</h2>
            <div class="mt-5 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
                @foreach (array_slice($trainings, 1, 3) as $training)
                    <x-training-card :training="$training" />
                @endforeach
            </div>
        </div>
    </div>
</section>

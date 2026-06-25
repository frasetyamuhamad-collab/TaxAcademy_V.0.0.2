<section class="lg:pl-72">
    <div class="mx-auto grid max-w-7xl gap-6 px-4 py-8 sm:px-6 lg:grid-cols-[320px_1fr] lg:px-8">
        <x-card class="h-fit p-5">
            <div class="mb-5">
                <x-badge>{{ $training['category'] }}</x-badge>
                <h1 class="mt-3 text-xl font-bold text-slate-950 dark:text-white">{{ $training['title'] }}</h1>
                <div class="mt-4"><x-progress-bar :value="$training['progress']" label="Course progress" /></div>
            </div>
            <div class="space-y-5">
                @foreach ($lessons as $module)
                    <div>
                        <p class="mb-3 text-sm font-semibold text-slate-900 dark:text-white">{{ $module['module'] }}</p>
                        <div class="space-y-2">
                            @foreach ($module['items'] as $item)
                                <button wire:click="markComplete({{ $item['id'] }})" class="flex w-full items-center gap-3 rounded-lg border border-slate-200 px-3 py-2 text-left text-sm dark:border-slate-800">
                                    <span class="grid size-6 place-items-center rounded-full {{ $item['done'] ? 'bg-green-600 text-white' : 'bg-slate-100 text-slate-400 dark:bg-slate-800' }}">
                                        <x-icon name="check" class="size-3.5" />
                                    </span>
                                    <span class="{{ $item['done'] ? 'text-slate-500 line-through' : 'text-slate-700 dark:text-slate-200' }}">{{ $item['title'] }}</span>
                                </button>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </x-card>

        <div class="space-y-6">
            <div class="aspect-video rounded-lg bg-slate-950 p-5 text-white shadow-sm">
                <div class="flex h-full flex-col items-center justify-center rounded-lg border border-white/10 bg-white/5">
                    <x-icon name="play" class="size-16 rounded-full bg-white/10 p-4" />
                    <p class="mt-4 font-semibold">Video Player Placeholder</p>
                    <p class="mt-1 text-sm text-white/60">Module 1 • Konsep Dasar Pajak</p>
                </div>
            </div>

            <x-card class="p-6">
                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-start">
                    <div>
                        <x-badge tone="green">In Progress</x-badge>
                        <h2 class="mt-3 text-2xl font-bold text-slate-950 dark:text-white">Konsep Dasar Pajak</h2>
                        <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">Pelajaran ini menjelaskan struktur dasar kewajiban perpajakan, jenis pajak, dan alur belajar yang akan dipakai sepanjang training.</p>
                    </div>
                    <x-button wire:click="markComplete({{ $lessons[0]['items'][0]['id'] ?? 0 }})">Complete Lesson</x-button>
                </div>
            </x-card>

            <x-card class="p-6">
                <h3 class="font-semibold text-slate-950 dark:text-white">Continue Learning</h3>
                <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">Lesson terakhir: Istilah yang Sering Dipakai. Estimasi 12 menit.</p>
            </x-card>
        </div>
    </div>
</section>

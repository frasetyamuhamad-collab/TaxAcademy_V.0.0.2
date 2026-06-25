<div>
    <section class="relative overflow-hidden border-b border-slate-200 bg-white dark:border-slate-800 dark:bg-ink-950">
        <div class="mx-auto grid max-w-7xl gap-10 px-4 py-16 sm:px-6 lg:grid-cols-[1.05fr_.95fr] lg:px-8 lg:py-20">
            <div class="flex flex-col justify-center">
                <x-badge>Platform edukasi pajak digital</x-badge>
                <h1 class="mt-6 max-w-3xl text-4xl font-bold tracking-tight text-slate-950 dark:text-white sm:text-5xl lg:text-6xl">Belajar pajak lebih terstruktur, praktis, dan siap dipakai.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">Tax Academy menyatukan training online, progress belajar, dan membership dalam satu customer portal modern untuk profesional dan bisnis.</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <x-button href="{{ route('register') }}" size="lg">Mulai Belajar <x-icon name="arrow" class="size-5" /></x-button>
                    <x-button href="{{ route('training.index') }}" variant="secondary" size="lg">Lihat Training</x-button>
                </div>
            </div>

            <div class="rounded-lg border border-slate-200 bg-slate-50 p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                <div class="rounded-lg bg-white p-5 shadow-sm dark:bg-slate-950">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Learning Progress</p>
                            <p class="mt-1 text-2xl font-bold text-slate-950 dark:text-white">72%</p>
                        </div>
                        <x-badge tone="green">Active</x-badge>
                    </div>
                    <div class="mt-6 space-y-4">
                        @foreach (array_slice($trainings, 0, 3) as $training)
                            <div class="rounded-lg border border-slate-200 p-4 dark:border-slate-800">
                                <div class="flex items-center justify-between gap-4">
                                    <div>
                                        <p class="font-semibold text-slate-900 dark:text-white">{{ $training['title'] }}</p>
                                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $training['category'] }} • {{ $training['duration'] }}</p>
                                    </div>
                                    <x-icon name="play" class="size-9 rounded-lg bg-brand-50 p-2 text-brand-700 dark:bg-brand-500/10" />
                                </div>
                                <div class="mt-4"><x-progress-bar :value="$training['progress']" /></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto grid max-w-7xl gap-4 px-4 py-10 sm:grid-cols-3 sm:px-6 lg:px-8">
        @foreach ([['12.500+', 'Student aktif'], ['80+', 'Training pajak'], ['91%', 'Completion rate']] as $stat)
            <x-card class="p-6">
                <p class="text-3xl font-bold text-slate-950 dark:text-white">{{ $stat[0] }}</p>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $stat[1] }}</p>
            </x-card>
        @endforeach
    </section>

    <section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="mb-6 flex items-end justify-between gap-4">
            <div>
                <x-badge>Featured Training</x-badge>
                <h2 class="mt-3 text-2xl font-bold text-slate-950 dark:text-white">Materi pajak pilihan</h2>
            </div>
            <x-button href="{{ route('training.index') }}" variant="secondary">Semua Training</x-button>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($trainings as $training)
                <x-training-card :training="$training" />
            @endforeach
        </div>
    </section>

    <section class="bg-slate-100 py-14 dark:bg-slate-900/60">
        <div class="mx-auto grid max-w-7xl gap-5 px-4 sm:grid-cols-3 sm:px-6 lg:px-8">
            @foreach ([['Expert Instructor', 'Instruktur praktisi dengan pengalaman kasus perpajakan aktual.'], ['Flexible Learning', 'Belajar mandiri dari perangkat apa pun dengan progress tersimpan.'], ['Certification', 'Sertifikat digital sebagai bukti penyelesaian training.']] as $benefit)
                <x-card class="p-6">
                    <x-icon name="check" class="size-10 rounded-lg bg-green-50 p-2 text-green-700" />
                    <h3 class="mt-5 font-semibold text-slate-950 dark:text-white">{{ $benefit[0] }}</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $benefit[1] }}</p>
                </x-card>
            @endforeach
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="mb-8 text-center">
            <x-badge>Membership</x-badge>
            <h2 class="mt-3 text-2xl font-bold text-slate-950 dark:text-white">Paket belajar fleksibel</h2>
        </div>
        <div class="grid gap-5 lg:grid-cols-3">
            @foreach ($plans as $plan)
                <x-pricing-card :plan="$plan" />
            @endforeach
        </div>
    </section>

    <section class="mx-auto grid max-w-7xl gap-5 px-4 py-10 sm:px-6 lg:grid-cols-2 lg:px-8">
        <x-card class="p-6">
            <p class="text-lg font-semibold text-slate-950 dark:text-white">"Materinya rapi dan langsung bisa dipakai untuk kerja bulanan."</p>
            <p class="mt-4 text-sm text-slate-500 dark:text-slate-400">Rizki, Finance Supervisor</p>
        </x-card>
        <x-card class="p-6">
            <p class="text-lg font-semibold text-slate-950 dark:text-white">"Dashboard progress bikin tim saya tahu training mana yang harus dilanjutkan."</p>
            <p class="mt-4 text-sm text-slate-500 dark:text-slate-400">Nadia, Business Owner</p>
        </x-card>
    </section>

    <section class="mx-auto max-w-4xl px-4 py-14 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-slate-950 dark:text-white">FAQ</h2>
        <div class="mt-6 space-y-3">
            @foreach ([['Apakah ini sudah terhubung pembayaran?', 'Belum. Backend PRD 1 hanya mencakup subscription aktif tanpa payment gateway.'], ['Apakah data sudah dari database?', 'Ya. Training, user, progress, dan paket subscription diambil dari database lokal.'], ['Apakah dark mode tersedia?', 'Ya, toggle dark mode tersedia di navbar.']] as $index => $faq)
                <x-card class="p-5">
                    <button class="flex w-full items-center justify-between text-left font-semibold" data-accordion-target="#faq-{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                        {{ $faq[0] }}
                        <x-icon name="arrow" class="size-4" />
                    </button>
                    <p id="faq-{{ $index }}" class="mt-3 {{ $index === 0 ? '' : 'hidden' }} text-sm text-slate-600 dark:text-slate-300">{{ $faq[1] }}</p>
                </x-card>
            @endforeach
        </div>
    </section>

    <footer class="border-t border-slate-200 px-4 py-8 dark:border-slate-800 sm:px-6 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-4 text-sm text-slate-500 dark:text-slate-400 sm:flex-row">
            <p>Tax Academy UI MVP</p>
            <p>Contact • LinkedIn • Instagram</p>
        </div>
    </footer>
</div>

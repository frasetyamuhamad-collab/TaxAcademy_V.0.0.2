<section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
    <div class="mb-8">
        <x-badge>Catalog</x-badge>
        <h1 class="mt-3 text-3xl font-bold text-slate-950 dark:text-white">Training Catalog</h1>
        <p class="mt-2 max-w-2xl text-slate-600 dark:text-slate-300">Cari materi berdasarkan judul atau kategori, lalu buka detail training untuk melihat modul dan CTA belajar.</p>
    </div>

    <x-card class="mb-6 p-4">
        <div class="grid gap-4 lg:grid-cols-[1fr_auto]">
            <label class="relative block">
                <x-icon name="search" class="pointer-events-none absolute left-4 top-3.5 size-5 text-slate-400" />
                <input wire:model.live.debounce.250ms="search" type="search" placeholder="Cari judul atau kategori" class="focus-ring w-full rounded-lg border border-slate-200 bg-white py-3 pl-12 pr-4 text-sm dark:border-slate-700 dark:bg-slate-900">
            </label>
            <div class="flex gap-2 overflow-x-auto">
                @foreach ($categories as $item)
                    <button wire:click="$set('category', '{{ $item }}')" class="focus-ring shrink-0 rounded-lg px-4 py-2 text-sm font-semibold {{ $category === $item ? 'bg-brand-700 text-white' : 'border border-slate-200 text-slate-600 dark:border-slate-700 dark:text-slate-300' }}">{{ $item }}</button>
                @endforeach
            </div>
        </div>
    </x-card>

    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($trainings as $training)
            <x-training-card :training="$training" />
        @empty
            <x-card class="col-span-full p-8 text-center text-slate-500 dark:text-slate-400">Training tidak ditemukan.</x-card>
        @endforelse
    </div>

    <div class="mt-8 flex items-center justify-between rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm text-slate-500 dark:border-slate-800 dark:bg-slate-900 dark:text-slate-400">
        <span>Menampilkan {{ count($trainings) }} dari 10 item per halaman</span>
        <div class="flex gap-2">
            <button class="rounded-lg border border-slate-200 px-3 py-2 dark:border-slate-700">Prev</button>
            <button class="rounded-lg bg-brand-700 px-3 py-2 text-white">1</button>
            <button class="rounded-lg border border-slate-200 px-3 py-2 dark:border-slate-700">Next</button>
        </div>
    </div>
</section>

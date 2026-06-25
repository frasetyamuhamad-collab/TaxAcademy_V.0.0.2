@props(['title', 'description' => null])

<section class="lg:pl-72">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-end">
            <div>
                <x-badge>Admin Panel</x-badge>
                <h1 class="mt-3 text-3xl font-bold text-slate-950 dark:text-white">{{ $title }}</h1>
                @if ($description)
                    <p class="mt-2 max-w-3xl text-slate-600 dark:text-slate-300">{{ $description }}</p>
                @endif
            </div>
            <div class="flex gap-2">
                <x-button variant="secondary">Export</x-button>
                <x-button>New Item</x-button>
            </div>
        </div>

        {{ $slot }}
    </div>
</section>

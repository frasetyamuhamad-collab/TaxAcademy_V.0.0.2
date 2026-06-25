<x-admin-shell title="Membership Management" description="Kelola paket subscription, status paket, renewal, upgrade, downgrade, dan cancel flow.">
    <div class="grid gap-5 lg:grid-cols-3">
        @foreach ($packages as $package)
            <x-card class="p-6">
                <div class="flex items-start justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-slate-950 dark:text-white">{{ $package['name'] }}</h2>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $package['access'] }}</p>
                    </div>
                    <x-badge tone="green">{{ $package['status'] }}</x-badge>
                </div>
                <p class="mt-6 text-3xl font-bold text-slate-950 dark:text-white">{{ $package['price'] }}</p>
                <p class="mt-2 text-sm text-slate-500 dark:text-slate-400">{{ $package['users'] }} active subscribers</p>
                <div class="mt-6 flex gap-2">
                    <x-button variant="secondary" class="flex-1">Edit</x-button>
                    <x-button variant="ghost" class="flex-1">Deactivate</x-button>
                </div>
            </x-card>
        @endforeach
    </div>
</x-admin-shell>

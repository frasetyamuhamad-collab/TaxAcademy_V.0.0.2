<x-admin-shell title="Admin Overview" description="Pantau aktivitas platform, revenue, membership, pembelajaran, dan konsultasi dari satu console.">
    <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($stats as $stat)
            <x-card class="p-5">
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $stat['label'] }}</p>
                <div class="mt-3 flex items-end justify-between gap-3">
                    <p class="text-3xl font-bold text-slate-950 dark:text-white">{{ $stat['value'] }}</p>
                    <x-badge :tone="$stat['tone']">{{ $stat['trend'] }}</x-badge>
                </div>
            </x-card>
        @endforeach
    </div>

    <div class="mt-6 grid gap-5 lg:grid-cols-[1fr_380px]">
        <x-card class="p-6">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-slate-950 dark:text-white">Revenue Snapshot</h2>
                <x-badge>Monthly</x-badge>
            </div>
            <div class="mt-8 flex h-64 items-end gap-3">
                @foreach ([45, 58, 51, 72, 66, 84, 78, 92] as $bar)
                    <div class="flex flex-1 flex-col items-center gap-2">
                        <div class="w-full rounded-t-lg bg-brand-700 {{ [45 => 'h-[45%]', 58 => 'h-[58%]', 51 => 'h-[51%]', 72 => 'h-[72%]', 66 => 'h-[66%]', 84 => 'h-[84%]', 78 => 'h-[78%]', 92 => 'h-[92%]'][$bar] }}"></div>
                        <span class="text-xs text-slate-500">{{ $bar }}</span>
                    </div>
                @endforeach
            </div>
        </x-card>

        <x-card class="p-6">
            <h2 class="text-xl font-bold text-slate-950 dark:text-white">Operational Queue</h2>
            <div class="mt-5 space-y-4">
                @foreach ([['Payment callbacks', '8 pending review'], ['Open consultations', '42 conversations'], ['Course drafts', '6 need publishing'], ['Expiring subscriptions', '128 this week']] as $item)
                    <div class="rounded-lg border border-slate-200 p-4 dark:border-slate-800">
                        <p class="font-semibold text-slate-950 dark:text-white">{{ $item[0] }}</p>
                        <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $item[1] }}</p>
                    </div>
                @endforeach
            </div>
        </x-card>
    </div>
</x-admin-shell>

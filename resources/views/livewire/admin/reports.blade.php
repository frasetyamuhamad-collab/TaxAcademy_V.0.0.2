<x-admin-shell title="Reports Dashboard" description="Visualisasi revenue, user growth, completion rate, popular course, dan performa konsultasi.">
    <div class="grid gap-5 lg:grid-cols-2">
        @foreach (['Revenue by Package', 'User Conversion', 'Learning Completion', 'Consultant Performance'] as $title)
            <x-card class="p-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-slate-950 dark:text-white">{{ $title }}</h2>
                    <x-badge>Preview</x-badge>
                </div>
                <div class="mt-8 space-y-4">
                    @foreach ([84, 68, 52] as $value)
                        <x-progress-bar :value="$value" label="Metric {{ $loop->iteration }}" />
                    @endforeach
                </div>
            </x-card>
        @endforeach
    </div>
</x-admin-shell>

@props(['headers'])

<x-card class="overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full min-w-[760px] text-left text-sm">
            <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500 dark:bg-slate-800 dark:text-slate-300">
                <tr>
                    @foreach ($headers as $header)
                        <th class="px-5 py-4 font-semibold">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                {{ $slot }}
            </tbody>
        </table>
    </div>
</x-card>

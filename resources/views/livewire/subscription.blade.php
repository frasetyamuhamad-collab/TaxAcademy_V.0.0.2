<section class="{{ request()->routeIs('subscription') ? 'lg:pl-72' : '' }}">
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <x-badge>Subscription</x-badge>
            <h1 class="mt-4 text-3xl font-bold text-slate-950 dark:text-white sm:text-4xl">Pilih akses belajar yang sesuai.</h1>
            <p class="mt-4 text-slate-600 dark:text-slate-300">Semua paket masih berupa UI placeholder tanpa payment gateway atau checkout production.</p>
        </div>

        @if ($message)
            <x-card class="mx-auto mt-6 max-w-3xl p-4 text-center text-sm font-semibold text-green-700 dark:text-green-300">{{ $message }}</x-card>
        @endif

        <div class="mt-10 grid gap-5 lg:grid-cols-3">
            @foreach ($plans as $plan)
                <x-pricing-card :plan="$plan" :interactive="request()->routeIs('subscription')" />
            @endforeach
        </div>

        <x-card class="mt-10 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[720px] text-left text-sm">
                    <thead class="bg-slate-50 text-slate-500 dark:bg-slate-800 dark:text-slate-300">
                        <tr>
                            <th class="px-5 py-4">Feature</th>
                            <th class="px-5 py-4">Basic</th>
                            <th class="px-5 py-4">Professional</th>
                            <th class="px-5 py-4">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                        @foreach ([['Training access', '8 kelas', 'Semua kelas', 'Semua + tim'], ['Duration', '30 hari', '90 hari', '365 hari'], ['Progress tracking', 'Ya', 'Ya', 'Ya'], ['Consultation placeholder', '-', '-', 'Ya']] as $row)
                            <tr>
                                @foreach ($row as $cell)
                                    <td class="px-5 py-4 text-slate-700 dark:text-slate-200">{{ $cell }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-card>

        <div class="mt-10 grid gap-4 md:grid-cols-2">
            @foreach ([['Apakah bisa upgrade?', 'Bisa, nanti di fase backend akan dibuat workflow upgrade.'], ['Apakah invoice tersedia?', 'Untuk fase UI hanya ditampilkan placeholder subscription.']] as $faq)
                <x-card class="p-5">
                    <h3 class="font-semibold text-slate-950 dark:text-white">{{ $faq[0] }}</h3>
                    <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">{{ $faq[1] }}</p>
                </x-card>
            @endforeach
        </div>
    </div>
</section>

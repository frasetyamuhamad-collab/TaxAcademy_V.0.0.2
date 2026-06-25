<x-admin-shell title="Consultation Management" description="Monitoring queue konsultasi, assignment consultant, internal notes, status, dan SLA response.">
    <div class="mb-5 grid gap-5 sm:grid-cols-4">
        @foreach ([['Total', '1,248'], ['Open', '42'], ['Resolved', '1,126'], ['Avg Response', '8m']] as $metric)
            <x-card class="p-5">
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $metric[0] }}</p>
                <p class="mt-2 text-3xl font-bold text-slate-950 dark:text-white">{{ $metric[1] }}</p>
            </x-card>
        @endforeach
    </div>

    <x-admin-table :headers="['ID', 'Subject', 'Customer', 'Category', 'Consultant', 'Status', 'SLA', 'Actions']">
        @foreach ($consultations as $consultation)
            <tr>
                <td class="px-5 py-4 font-semibold text-slate-900 dark:text-white">{{ $consultation['id'] }}</td>
                <td class="px-5 py-4">{{ $consultation['subject'] }}</td>
                <td class="px-5 py-4">{{ $consultation['customer'] }}</td>
                <td class="px-5 py-4">{{ $consultation['category'] }}</td>
                <td class="px-5 py-4">{{ $consultation['consultant'] }}</td>
                <td class="px-5 py-4"><x-badge :tone="$consultation['status'] === 'Open' ? 'red' : 'blue'">{{ $consultation['status'] }}</x-badge></td>
                <td class="px-5 py-4">{{ $consultation['sla'] }}</td>
                <td class="px-5 py-4">
                    <div class="flex gap-2">
                        <button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">Assign</button>
                        <button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">Open</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-admin-table>
</x-admin-shell>

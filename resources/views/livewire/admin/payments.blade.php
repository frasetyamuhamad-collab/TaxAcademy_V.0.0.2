<x-admin-shell title="Payment Monitoring" description="Pantau transaksi, invoice, status pembayaran, callback, dan export transaksi.">
    <div class="mb-5 grid gap-5 sm:grid-cols-3">
        @foreach ([['Pending', '27'], ['Paid Today', '184'], ['Failed', '9']] as $metric)
            <x-card class="p-5">
                <p class="text-sm text-slate-500 dark:text-slate-400">{{ $metric[0] }}</p>
                <p class="mt-2 text-3xl font-bold text-slate-950 dark:text-white">{{ $metric[1] }}</p>
            </x-card>
        @endforeach
    </div>

    <x-admin-table :headers="['Invoice', 'Customer', 'Package', 'Method', 'Amount', 'Status', 'Created', 'Actions']">
        @foreach ($transactions as $transaction)
            <tr>
                <td class="px-5 py-4 font-semibold text-slate-900 dark:text-white">{{ $transaction['invoice'] }}</td>
                <td class="px-5 py-4">{{ $transaction['customer'] }}</td>
                <td class="px-5 py-4">{{ $transaction['package'] }}</td>
                <td class="px-5 py-4">{{ $transaction['method'] }}</td>
                <td class="px-5 py-4">{{ $transaction['amount'] }}</td>
                <td class="px-5 py-4"><x-badge :tone="$transaction['status'] === 'Paid' ? 'green' : ($transaction['status'] === 'Pending' ? 'blue' : 'red')">{{ $transaction['status'] }}</x-badge></td>
                <td class="px-5 py-4">{{ $transaction['date'] }}</td>
                <td class="px-5 py-4"><button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">Invoice</button></td>
            </tr>
        @endforeach
    </x-admin-table>
</x-admin-shell>

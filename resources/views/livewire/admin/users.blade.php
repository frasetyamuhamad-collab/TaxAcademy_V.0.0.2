<x-admin-shell title="User Management" description="Kelola customer, status akun, membership, dan akses belajar.">
    <x-card class="mb-5 p-4">
        <div class="grid gap-3 md:grid-cols-[1fr_auto_auto]">
            <label class="relative block">
                <x-icon name="search" class="pointer-events-none absolute left-4 top-3.5 size-5 text-slate-400" />
                <input wire:model.live.debounce.250ms="search" type="search" placeholder="Search user, email, phone" class="focus-ring w-full rounded-lg border border-slate-200 bg-white py-3 pl-12 pr-4 text-sm dark:border-slate-700 dark:bg-slate-900">
            </label>
            <select class="focus-ring rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-900">
                <option>All Membership</option>
                <option>Basic</option>
                <option>Professional</option>
                <option>Enterprise</option>
            </select>
            <select class="focus-ring rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-900">
                <option>All Status</option>
                <option>Active</option>
                <option>Suspended</option>
            </select>
        </div>
    </x-card>

    <x-admin-table :headers="['User ID', 'Name', 'Email', 'Phone', 'Membership', 'Status', 'Registered', 'Actions']">
        @foreach ($users as $user)
            <tr>
                <td class="px-5 py-4 font-semibold text-slate-900 dark:text-white">{{ $user['id'] }}</td>
                <td class="px-5 py-4">{{ $user['name'] }}</td>
                <td class="px-5 py-4">{{ $user['email'] }}</td>
                <td class="px-5 py-4">{{ $user['phone'] }}</td>
                <td class="px-5 py-4"><x-badge>{{ $user['membership'] }}</x-badge></td>
                <td class="px-5 py-4"><x-badge :tone="$user['status'] === 'Active' ? 'green' : 'red'">{{ $user['status'] }}</x-badge></td>
                <td class="px-5 py-4">{{ $user['date'] }}</td>
                <td class="px-5 py-4">
                    <div class="flex gap-2">
                        <button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">View</button>
                        <button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">Edit</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-admin-table>
</x-admin-shell>

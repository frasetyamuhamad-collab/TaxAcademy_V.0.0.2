<section class="lg:pl-72">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-[360px_1fr]">
            <x-card class="h-fit p-6">
                <div class="flex flex-col items-center text-center">
                    <div class="grid size-24 place-items-center rounded-lg bg-brand-700 text-2xl font-bold text-white">AR</div>
                    <h1 class="mt-4 text-2xl font-bold text-slate-950 dark:text-white">{{ $user->name }}</h1>
                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $user->email }}</p>
                    <x-badge tone="green" class="mt-4">{{ $user->membership_status }} Active</x-badge>
                </div>
                <div class="mt-6 space-y-3 text-sm">
                    <div class="flex justify-between gap-4"><span class="text-slate-500">Phone</span><span class="font-medium">{{ $user->phone }}</span></div>
                    <div class="flex justify-between gap-4"><span class="text-slate-500">Expires</span><span class="font-medium">{{ optional($user->activeSubscription?->ends_at)->format('d M Y') ?? '-' }}</span></div>
                </div>
            </x-card>

            <div class="space-y-6">
                @if ($message)
                    <x-card class="p-4 text-sm font-semibold text-green-700 dark:text-green-300">{{ $message }}</x-card>
                @endif
                <x-card class="p-6">
                    <h2 class="text-xl font-bold text-slate-950 dark:text-white">Edit Profile</h2>
                    <form wire:submit="updateProfile" class="mt-5 grid gap-5 sm:grid-cols-2">
                        <x-form-input wire:model="name" label="Full Name" name="name" />
                        <x-form-input wire:model="email" label="Email" name="email" type="email" />
                        <x-form-input wire:model="phone" label="Phone" name="phone" />
                        <label class="block">
                            <span class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Membership Status</span>
                            <select class="focus-ring w-full rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-900">
                                <option>{{ $user->membership_status }}</option>
                            </select>
                        </label>
                        <div class="sm:col-span-2"><x-button type="submit">Save Profile</x-button></div>
                    </form>
                </x-card>

                <x-card class="p-6">
                    <h2 class="text-xl font-bold text-slate-950 dark:text-white">Change Password</h2>
                    <form wire:submit="updatePassword" class="mt-5 grid gap-5 sm:grid-cols-2">
                        <x-form-input wire:model="current_password" label="Current Password" name="current_password" type="password" />
                        <x-form-input wire:model="new_password" label="New Password" name="new_password" type="password" />
                        <x-form-input wire:model="new_password_confirmation" label="Confirm New Password" name="new_password_confirmation" type="password" />
                        <div class="flex items-end"><x-button type="submit" variant="secondary">Update Password</x-button></div>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</section>

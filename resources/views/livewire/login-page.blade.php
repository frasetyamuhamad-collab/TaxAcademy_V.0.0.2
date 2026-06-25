<section class="mx-auto grid min-h-[calc(100vh-73px)] max-w-7xl items-center gap-8 px-4 py-10 sm:px-6 lg:grid-cols-2 lg:px-8">
    <div>
        <x-badge>Welcome back</x-badge>
        <h1 class="mt-4 text-3xl font-bold text-slate-950 dark:text-white sm:text-4xl">Masuk ke customer portal.</h1>
        <p class="mt-4 max-w-xl text-slate-600 dark:text-slate-300">input email alya.rahman@example.com dan password: password  untuk melihat customer area</p>
    </div>
    <x-card class="p-6">
        <form wire:submit="login" class="space-y-5">
            <x-form-input wire:model="email" label="Email" name="email" type="email" placeholder="nama@email.com" hint="Validation UI: format email wajib benar." />
            @error('email') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            <x-form-input wire:model="password" label="Password" name="password" type="password" placeholder="Minimal 8 karakter" hint="Required validation placeholder." />
            @error('password') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-slate-600 dark:text-slate-300"><input wire:model="remember" type="checkbox" class="rounded border-slate-300"> Remember me</label>
                <a href="#" class="font-semibold text-brand-700 dark:text-brand-500">Forgot password?</a>
            </div>
            <x-button type="submit" class="w-full">Login</x-button>
            <p class="text-center text-sm text-slate-500">Belum punya akun? <a href="{{ route('register') }}" class="font-semibold text-brand-700">Register</a></p>
        </form>
    </x-card>
</section>

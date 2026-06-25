<section class="mx-auto grid min-h-[calc(100vh-73px)] max-w-7xl items-center gap-8 px-4 py-10 sm:px-6 lg:grid-cols-2 lg:px-8">
    <div>
        <x-badge>Create account</x-badge>
        <h1 class="mt-4 text-3xl font-bold text-slate-950 dark:text-white sm:text-4xl">Mulai membership Tax Academy.</h1>
        <p class="mt-4 max-w-xl text-slate-600 dark:text-slate-300">UI register menampilkan field dan state validasi sesuai PRD tanpa menyimpan data apa pun.</p>
    </div>
    <x-card class="p-6">
        <form wire:submit="register" class="grid gap-5">
            <x-form-input wire:model="name" label="Full Name" name="name" placeholder="Alya Rahman" hint="Required validation placeholder." />
            @error('name') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            <x-form-input wire:model="email" label="Email" name="email" type="email" placeholder="nama@email.com" hint="Email format validation placeholder." />
            @error('email') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            <x-form-input wire:model="phone" label="Phone Number" name="phone" type="tel" placeholder="+62 812 0000 0000" />
            <div class="grid gap-5 sm:grid-cols-2">
                <x-form-input wire:model="password" label="Password" name="password" type="password" placeholder="Minimal 8 karakter" />
                <x-form-input wire:model="password_confirmation" label="Confirm Password" name="password_confirmation" type="password" placeholder="Ulangi password" hint="Password match validation placeholder." />
            </div>
            @error('password') <p class="text-sm text-red-600">{{ $message }}</p> @enderror
            <x-button type="submit" class="w-full">Register</x-button>
            <p class="text-center text-sm text-slate-500">Sudah punya akun? <a href="{{ route('login') }}" class="font-semibold text-brand-700">Login</a></p>
        </form>
    </x-card>
</section>

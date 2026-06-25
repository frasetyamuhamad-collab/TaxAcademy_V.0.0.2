@php
    $links = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Training', 'route' => 'training.index'],
        ['label' => 'Pricing', 'route' => 'pricing'],
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-slate-200/70 bg-white/90 backdrop-blur dark:border-slate-800 dark:bg-ink-950/90">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8" x-data="{ open: false }">
        <a href="{{ route('home') }}" class="flex items-center gap-3 font-semibold text-slate-950 dark:text-white">
            <span class="grid size-10 place-items-center rounded-lg bg-brand-700 text-sm font-bold text-white">TA</span>
            <span>Tax Academy</span>
        </a>

        <div class="hidden items-center gap-8 md:flex">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}" class="text-sm font-medium text-slate-600 hover:text-brand-700 dark:text-slate-300 dark:hover:text-white">{{ $link['label'] }}</a>
            @endforeach
        </div>

        <div class="hidden items-center gap-3 md:flex">
            <button type="button" onclick="toggleTheme()" class="focus-ring grid size-10 place-items-center rounded-lg border border-slate-200 text-slate-600 dark:border-slate-700 dark:text-slate-200" aria-label="Toggle dark mode">
                <x-icon name="moon" class="size-5" />
            </button>
            @auth
                <x-button href="{{ route('dashboard') }}" size="sm">Dashboard</x-button>
            @else
                <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-700 hover:text-brand-700 dark:text-slate-200">Login</a>
                <x-button href="{{ route('register') }}" size="sm">Register</x-button>
            @endauth
        </div>

        <button type="button" class="focus-ring grid size-10 place-items-center rounded-lg border border-slate-200 md:hidden dark:border-slate-700" data-collapse-toggle="public-mobile-menu" aria-controls="public-mobile-menu" aria-expanded="false">
            <x-icon name="menu" class="size-5" />
        </button>
    </nav>

    <div id="public-mobile-menu" class="hidden border-t border-slate-200 px-4 py-4 dark:border-slate-800 md:hidden">
        <div class="flex flex-col gap-3">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}" class="rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 dark:text-slate-200 dark:hover:bg-slate-800">{{ $link['label'] }}</a>
            @endforeach
            <div class="grid grid-cols-2 gap-3 pt-2">
                @auth
                    <x-button href="{{ route('dashboard') }}" class="col-span-2">Dashboard</x-button>
                @else
                    <x-button href="{{ route('login') }}" variant="secondary">Login</x-button>
                    <x-button href="{{ route('register') }}">Register</x-button>
                @endauth
            </div>
        </div>
    </div>
</header>

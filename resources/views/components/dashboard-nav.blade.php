@php
    $user = auth()->user();
    $links = [
        ['label' => 'Dashboard', 'route' => 'dashboard', 'icon' => 'chart'],
        ['label' => 'Training', 'route' => 'training.index', 'icon' => 'book'],
        ['label' => 'Learning', 'route' => 'learning', 'icon' => 'play'],
        ['label' => 'Subscription', 'route' => 'subscription', 'icon' => 'card'],
        ['label' => 'Profile', 'route' => 'profile', 'icon' => 'user'],
    ];
@endphp

<aside class="fixed inset-y-0 left-0 z-40 hidden w-72 border-r border-slate-200 bg-white p-4 dark:border-slate-800 dark:bg-slate-950 lg:block">
    <a href="{{ route('dashboard') }}" class="mb-8 flex items-center gap-3 font-semibold text-slate-950 dark:text-white">
        <span class="grid size-10 place-items-center rounded-lg bg-brand-700 text-sm font-bold text-white">TA</span>
        <span>Tax Academy</span>
    </a>
    <nav class="space-y-1">
        @foreach ($links as $link)
            <a href="{{ route($link['route']) }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-600 hover:bg-brand-50 hover:text-brand-700 dark:text-slate-300 dark:hover:bg-slate-900 dark:hover:text-white">
                <x-icon :name="$link['icon']" class="size-5" />
                {{ $link['label'] }}
            </a>
        @endforeach
    </nav>
</aside>

<header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur dark:border-slate-800 dark:bg-ink-950/90 lg:pl-72">
    <div class="flex items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-brand-700 dark:text-brand-500">Member Portal</p>
            <p class="text-sm text-slate-500 dark:text-slate-400">UI preview dengan dummy data</p>
        </div>
        <div class="flex items-center gap-3">
            <button type="button" onclick="toggleTheme()" class="focus-ring grid size-10 place-items-center rounded-lg border border-slate-200 text-slate-600 dark:border-slate-700 dark:text-slate-200" aria-label="Toggle dark mode">
                <x-icon name="moon" class="size-5" />
            </button>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="focus-ring rounded-lg border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-600 dark:border-slate-700 dark:text-slate-200">Logout</button>
            </form>
            <a href="{{ route('profile') }}" class="flex items-center gap-3 rounded-lg border border-slate-200 px-3 py-2 dark:border-slate-700">
                <span class="grid size-8 place-items-center rounded-lg bg-slate-900 text-xs font-semibold text-white dark:bg-white dark:text-slate-950">{{ strtoupper(substr($user?->name ?? 'U', 0, 1)) }}</span>
                <span class="hidden text-sm font-medium text-slate-700 dark:text-slate-200 sm:inline">{{ $user?->name ?? 'User' }}</span>
            </a>
        </div>
    </div>
    <nav class="flex gap-2 overflow-x-auto px-4 pb-3 sm:px-6 lg:hidden">
        @foreach ($links as $link)
            <a href="{{ route($link['route']) }}" class="flex shrink-0 items-center gap-2 rounded-lg border border-slate-200 px-3 py-2 text-sm text-slate-600 dark:border-slate-700 dark:text-slate-300">
                <x-icon :name="$link['icon']" class="size-4" />
                {{ $link['label'] }}
            </a>
        @endforeach
    </nav>
</header>

@php
    $links = [
        ['label' => 'Overview', 'route' => 'admin.dashboard', 'icon' => 'chart'],
        ['label' => 'Users', 'route' => 'admin.users', 'icon' => 'user'],
        ['label' => 'Courses', 'route' => 'admin.courses', 'icon' => 'book'],
        ['label' => 'Membership', 'route' => 'admin.subscriptions', 'icon' => 'card'],
        ['label' => 'Payments', 'route' => 'admin.payments', 'icon' => 'card'],
        ['label' => 'Consultations', 'route' => 'admin.consultations', 'icon' => 'message'],
        ['label' => 'Reports', 'route' => 'admin.reports', 'icon' => 'chart'],
        ['label' => 'CMS', 'route' => 'admin.cms', 'icon' => 'settings'],
    ];
@endphp

<aside class="fixed inset-y-0 left-0 z-40 hidden w-72 border-r border-slate-200 bg-slate-950 p-4 text-white lg:block">
    <a href="{{ route('admin.dashboard') }}" class="mb-8 flex items-center gap-3 font-semibold">
        <span class="grid size-10 place-items-center rounded-lg bg-white text-sm font-bold text-slate-950">TA</span>
        <span>Admin Portal</span>
    </a>

    <nav class="space-y-1">
        @foreach ($links as $link)
            <a href="{{ route($link['route']) }}" class="flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 hover:text-white">
                <x-icon :name="$link['icon']" class="size-5" />
                {{ $link['label'] }}
            </a>
        @endforeach
    </nav>
</aside>

<header class="sticky top-0 z-30 border-b border-slate-200 bg-white/90 backdrop-blur dark:border-slate-800 dark:bg-ink-950/90 lg:pl-72">
    <div class="flex items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <div>
            <p class="text-xs font-semibold uppercase tracking-wider text-brand-700 dark:text-brand-500">Operations Console</p>
            <p class="text-sm text-slate-500 dark:text-slate-400">Frontend admin panel preview</p>
        </div>
        <div class="flex items-center gap-3">
            <button type="button" onclick="toggleTheme()" class="focus-ring grid size-10 place-items-center rounded-lg border border-slate-200 text-slate-600 dark:border-slate-700 dark:text-slate-200" aria-label="Toggle dark mode">
                <x-icon name="moon" class="size-5" />
            </button>
            <a href="{{ route('dashboard') }}" class="hidden rounded-lg border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-600 dark:border-slate-700 dark:text-slate-200 sm:inline-flex">Member View</a>
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

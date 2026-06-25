@props(['title' => 'Tax Learning Platform', 'member' => false, 'admin' => false])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <script>
        const storedTheme = localStorage.getItem('theme');
        if (storedTheme === 'dark' || (!storedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <div class="min-h-screen">
        @if ($admin)
            <x-admin-nav />
        @elseif ($member)
            <x-dashboard-nav />
        @else
            <x-public-nav />
        @endif

        <main>
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
</body>
</html>

<x-admin-shell title="Course Management" description="Kelola kategori, course, module, lesson, status publish, dan urutan materi.">
    <div class="mb-5 grid gap-5 lg:grid-cols-5">
        @foreach (['Pajak Pribadi', 'Pajak Badan', 'PPN', 'Brevet', 'Tax Planning'] as $category)
            <x-card class="p-4">
                <p class="font-semibold text-slate-950 dark:text-white">{{ $category }}</p>
                <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Category</p>
            </x-card>
        @endforeach
    </div>

    <x-admin-table :headers="['Course', 'Category', 'Level', 'Duration', 'Lessons', 'Status', 'Module Tools']">
        @foreach ($courses as $course)
            <tr>
                <td class="px-5 py-4 font-semibold text-slate-900 dark:text-white">{{ $course['title'] }}</td>
                <td class="px-5 py-4">{{ $course['category'] }}</td>
                <td class="px-5 py-4">{{ $course['level'] }}</td>
                <td class="px-5 py-4">{{ $course['duration'] }}</td>
                <td class="px-5 py-4">{{ $course['lessons'] }}</td>
                <td class="px-5 py-4"><x-badge :tone="$course['status'] === 'Published' ? 'green' : ($course['status'] === 'Draft' ? 'blue' : 'slate')">{{ $course['status'] }}</x-badge></td>
                <td class="px-5 py-4">
                    <div class="flex gap-2">
                        <button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">Modules</button>
                        <button class="rounded-lg border border-slate-200 px-3 py-1.5 font-semibold dark:border-slate-700">Lessons</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </x-admin-table>
</x-admin-shell>

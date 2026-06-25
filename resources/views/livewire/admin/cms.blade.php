<x-admin-shell title="CMS Management" description="Kelola konten homepage, pricing, testimonials, FAQ, dan artikel blog dari admin console.">
    <div class="grid gap-5 lg:grid-cols-[1fr_360px]">
        <x-card class="p-6">
            <h2 class="text-xl font-bold text-slate-950 dark:text-white">Homepage Content</h2>
            <form class="mt-5 grid gap-5">
                <x-form-input label="Hero Headline" name="hero_headline" value="Belajar pajak lebih terstruktur, praktis, dan siap dipakai." />
                <label class="block">
                    <span class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">Hero Description</span>
                    <textarea class="focus-ring min-h-32 w-full rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-900">Tax Academy menyatukan training online, progress belajar, dan membership dalam satu customer portal modern.</textarea>
                </label>
                <x-form-input label="Primary CTA" name="primary_cta" value="Mulai Belajar" />
                <x-button>Save Draft</x-button>
            </form>
        </x-card>

        <div class="space-y-5">
            <x-card class="p-6">
                <h2 class="text-xl font-bold text-slate-950 dark:text-white">Blog Workflow</h2>
                <div class="mt-5 space-y-3">
                    @foreach (['Draft Articles', 'Published Articles', 'Archived Articles'] as $item)
                        <div class="flex items-center justify-between rounded-lg border border-slate-200 p-3 dark:border-slate-800">
                            <span class="font-semibold">{{ $item }}</span>
                            <x-badge>{{ $loop->iteration * 4 }}</x-badge>
                        </div>
                    @endforeach
                </div>
            </x-card>

            <x-card class="p-6">
                <h2 class="text-xl font-bold text-slate-950 dark:text-white">Settings</h2>
                <div class="mt-5 space-y-3 text-sm text-slate-600 dark:text-slate-300">
                    <label class="flex items-center justify-between gap-3">
                        Homepage published
                        <input type="checkbox" checked class="rounded border-slate-300">
                    </label>
                    <label class="flex items-center justify-between gap-3">
                        Show testimonials
                        <input type="checkbox" checked class="rounded border-slate-300">
                    </label>
                </div>
            </x-card>
        </div>
    </div>
</x-admin-shell>

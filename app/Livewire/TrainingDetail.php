<?php

namespace App\Livewire;

use App\Models\Training;
use App\Support\ViewData;
use Livewire\Component;

class TrainingDetail extends Component
{
    public string $slug;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $training = Training::query()
            ->with(['category', 'lessons'])
            ->where('slug', $this->slug)
            ->firstOrFail();

        return view('livewire.training-detail', [
            'training' => ViewData::training($training, auth()->user()),
            'recommended' => Training::query()
                ->with(['category', 'lessons'])
                ->where('status', 'published')
                ->whereKeyNot($training->id)
                ->take(3)
                ->get()
                ->map(fn (Training $item) => ViewData::training($item, auth()->user()))
                ->all(),
        ])->layout('components.layouts.app', ['title' => $training->title]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Training;
use App\Models\TrainingCategory;
use App\Support\ViewData;
use Livewire\Component;

class TrainingCatalog extends Component
{
    public string $search = '';

    public string $category = 'Semua';

    public function render()
    {
        $trainings = Training::query()
            ->with(['category', 'lessons'])
            ->where('status', 'published')
            ->when($this->category !== 'Semua', fn ($query) => $query->whereHas('category', fn ($category) => $category->where('name', $this->category)))
            ->when($this->search !== '', function ($query) {
                $query->where(function ($inner) {
                    $inner->where('title', 'like', '%'.$this->search.'%')
                        ->orWhereHas('category', fn ($category) => $category->where('name', 'like', '%'.$this->search.'%'));
                });
            })
            ->get()
            ->map(fn (Training $training) => ViewData::training($training, auth()->user()))
            ->all();

        return view('livewire.training-catalog', [
            'trainings' => $trainings,
            'categories' => array_merge(['Semua'], TrainingCategory::query()->orderBy('name')->pluck('name')->all()),
        ])->layout('components.layouts.app', ['title' => 'Training Catalog']);
    }
}

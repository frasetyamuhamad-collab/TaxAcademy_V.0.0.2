<?php

namespace App\Livewire;

use App\Models\SubscriptionPackage;
use App\Models\Training;
use App\Support\ViewData;
use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        return view('livewire.landing', [
            'trainings' => Training::query()
                ->with(['category', 'lessons'])
                ->where('status', 'published')
                ->where('is_featured', true)
                ->take(6)
                ->get()
                ->map(fn (Training $training) => ViewData::training($training, auth()->user()))
                ->all(),
            'plans' => SubscriptionPackage::query()
                ->where('is_active', true)
                ->get()
                ->map(fn (SubscriptionPackage $package) => ViewData::plan($package))
                ->all(),
        ])->layout('components.layouts.app', ['title' => 'Tax Academy']);
    }
}

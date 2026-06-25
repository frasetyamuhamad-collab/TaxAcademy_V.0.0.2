<?php

namespace App\Livewire;

use App\Models\Training;
use App\Support\ViewData;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = auth()->user()->load('activeSubscription.package');
        $trainings = Training::query()->with(['category', 'lessons'])->where('status', 'published')->get();
        $trainingCards = $trainings->map(fn (Training $training) => ViewData::training($training, $user))->all();
        $completed = collect($trainingCards)->where('progress', 100)->count();
        $inProgress = collect($trainingCards)->filter(fn ($training) => $training['progress'] > 0 && $training['progress'] < 100)->count();

        return view('livewire.dashboard', [
            'user' => $user,
            'trainings' => $trainingCards,
            'completed' => $completed,
            'inProgress' => $inProgress,
        ])->layout('components.layouts.app', ['title' => 'Dashboard', 'member' => true]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Lesson;
use App\Models\LessonProgress;
use App\Models\Training;
use App\Support\ViewData;
use Livewire\Component;

class Learning extends Component
{
    public ?int $trainingId = null;

    public function markComplete(int $lessonId): void
    {
        $lesson = Lesson::query()->findOrFail($lessonId);

        LessonProgress::updateOrCreate(
            ['user_id' => auth()->id(), 'lesson_id' => $lesson->id],
            ['training_id' => $lesson->training_id, 'completed_at' => now(), 'last_watched_at' => now()],
        );
    }

    public function render()
    {
        $training = Training::query()
            ->with(['category', 'lessons.progress' => fn ($query) => $query->where('user_id', auth()->id())])
            ->when($this->trainingId, fn ($query) => $query->whereKey($this->trainingId))
            ->where('status', 'published')
            ->firstOrFail();

        $lessons = $training->lessons
            ->groupBy('module_title')
            ->map(fn ($items, $module) => [
                'module' => $module,
                'items' => $items->map(fn (Lesson $lesson) => [
                    'id' => $lesson->id,
                    'title' => $lesson->title,
                    'done' => $lesson->progress->isNotEmpty(),
                ])->all(),
            ])
            ->values()
            ->all();

        return view('livewire.learning', [
            'training' => ViewData::training($training, auth()->user()),
            'lessons' => $lessons,
        ])->layout('components.layouts.app', ['title' => 'Learning', 'member' => true]);
    }
}

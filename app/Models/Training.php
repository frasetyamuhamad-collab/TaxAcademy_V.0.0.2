<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'training_category_id',
        'title',
        'slug',
        'description',
        'duration',
        'instructor',
        'level',
        'status',
        'is_featured',
    ];

    protected function casts(): array
    {
        return ['is_featured' => 'boolean'];
    }

    public function category()
    {
        return $this->belongsTo(TrainingCategory::class, 'training_category_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class)->orderBy('sort_order');
    }

    public function progress()
    {
        return $this->hasMany(LessonProgress::class);
    }

    public function getProgressPercentageFor(?User $user): int
    {
        if (! $user) {
            return 0;
        }

        $lessonIds = $this->lessons()->pluck('id');
        $total = $lessonIds->count();

        if ($total === 0) {
            return 0;
        }

        $completed = LessonProgress::query()
            ->where('user_id', $user->id)
            ->whereIn('lesson_id', $lessonIds)
            ->whereNotNull('completed_at')
            ->count();

        return (int) round(($completed / $total) * 100);
    }
}

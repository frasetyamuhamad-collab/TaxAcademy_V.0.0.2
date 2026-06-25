<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonProgress extends Model
{
    protected $fillable = [
        'user_id',
        'training_id',
        'lesson_id',
        'completed_at',
        'last_watched_at',
    ];

    protected function casts(): array
    {
        return [
            'completed_at' => 'datetime',
            'last_watched_at' => 'datetime',
        ];
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}

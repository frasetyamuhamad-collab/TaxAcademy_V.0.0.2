<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'training_id',
        'module_title',
        'title',
        'description',
        'video_url',
        'duration_minutes',
        'sort_order',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function progress()
    {
        return $this->hasMany(LessonProgress::class);
    }
}

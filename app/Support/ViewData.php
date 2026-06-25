<?php

namespace App\Support;

use App\Models\SubscriptionPackage;
use App\Models\Training;
use App\Models\User;

class ViewData
{
    public static function training(Training $training, ?User $user = null): array
    {
        $training->loadMissing(['category', 'lessons']);

        return [
            'id' => $training->id,
            'slug' => $training->slug,
            'title' => $training->title,
            'description' => $training->description,
            'category' => $training->category?->name ?? 'Training',
            'duration' => $training->duration,
            'lessons' => $training->lessons->count(),
            'instructor' => $training->instructor,
            'progress' => $training->getProgressPercentageFor($user),
        ];
    }

    public static function plan(SubscriptionPackage $package): array
    {
        return [
            'id' => $package->id,
            'name' => $package->name,
            'price' => 'Rp'.number_format($package->price / 1000, 0, ',', '.').'rb',
            'access' => $package->access_days.' Days Access',
            'features' => $package->features,
            'popular' => $package->is_popular,
        ];
    }
}

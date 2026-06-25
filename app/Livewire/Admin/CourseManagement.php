<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class CourseManagement extends Component
{
    public array $courses = [
        ['title' => 'Pajak Pribadi dari Nol', 'category' => 'Pajak Pribadi', 'level' => 'Beginner', 'duration' => '4 jam', 'lessons' => 18, 'status' => 'Published'],
        ['title' => 'PPN Praktis untuk Bisnis', 'category' => 'PPN', 'level' => 'Intermediate', 'duration' => '6 jam', 'lessons' => 24, 'status' => 'Published'],
        ['title' => 'Brevet A/B Intensif', 'category' => 'Brevet', 'level' => 'Advanced', 'duration' => '18 jam', 'lessons' => 52, 'status' => 'Draft'],
        ['title' => 'Tax Planning UMKM', 'category' => 'Tax Planning', 'level' => 'Intermediate', 'duration' => '5 jam', 'lessons' => 20, 'status' => 'Archived'],
    ];

    public function render()
    {
        return view('livewire.admin.courses')->layout('components.layouts.app', [
            'title' => 'Course Management',
            'admin' => true,
        ]);
    }
}

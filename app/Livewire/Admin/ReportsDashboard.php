<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ReportsDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.reports')->layout('components.layouts.app', [
            'title' => 'Reports',
            'admin' => true,
        ]);
    }
}

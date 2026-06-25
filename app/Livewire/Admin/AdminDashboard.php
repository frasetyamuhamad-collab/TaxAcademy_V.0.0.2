<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{
    public array $stats = [
        ['label' => 'Total Users', 'value' => '12,480', 'trend' => '+12.4%', 'tone' => 'green'],
        ['label' => 'Active Membership', 'value' => '3,240', 'trend' => '+8.2%', 'tone' => 'green'],
        ['label' => 'Monthly Revenue', 'value' => 'Rp428jt', 'trend' => '+18.9%', 'tone' => 'green'],
        ['label' => 'Open Consultation', 'value' => '42', 'trend' => '-3.1%', 'tone' => 'blue'],
    ];

    public function render()
    {
        return view('livewire.admin.dashboard')->layout('components.layouts.app', [
            'title' => 'Admin Overview',
            'admin' => true,
        ]);
    }
}

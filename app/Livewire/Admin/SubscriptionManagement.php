<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class SubscriptionManagement extends Component
{
    public array $packages = [
        ['name' => 'Basic', 'price' => 'Rp299rb', 'access' => '30 Days', 'users' => 980, 'status' => 'Active'],
        ['name' => 'Professional', 'price' => 'Rp699rb', 'access' => '90 Days', 'users' => 1840, 'status' => 'Active'],
        ['name' => 'Enterprise', 'price' => 'Rp2,4jt', 'access' => '365 Days', 'users' => 420, 'status' => 'Active'],
    ];

    public function render()
    {
        return view('livewire.admin.subscriptions')->layout('components.layouts.app', [
            'title' => 'Membership Management',
            'admin' => true,
        ]);
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class UserManagement extends Component
{
    public string $search = '';

    public array $users = [
        ['id' => 'USR-1024', 'name' => 'Alya Rahman', 'email' => 'alya.rahman@example.com', 'phone' => '+62 812 4000 1199', 'membership' => 'Professional', 'status' => 'Active', 'date' => '16 Jun 2026'],
        ['id' => 'USR-1025', 'name' => 'Bima Tax', 'email' => 'bima@example.com', 'phone' => '+62 811 2222 3333', 'membership' => 'Basic', 'status' => 'Active', 'date' => '15 Jun 2026'],
        ['id' => 'USR-1026', 'name' => 'Nadia Putri', 'email' => 'nadia@example.com', 'phone' => '+62 813 8999 1122', 'membership' => 'Enterprise', 'status' => 'Suspended', 'date' => '12 Jun 2026'],
    ];

    public function render()
    {
        return view('livewire.admin.users')->layout('components.layouts.app', [
            'title' => 'User Management',
            'admin' => true,
        ]);
    }
}

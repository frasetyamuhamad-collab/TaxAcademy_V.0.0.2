<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ConsultationManagement extends Component
{
    public array $consultations = [
        ['id' => 'CNS-2048', 'subject' => 'Koreksi fiskal biaya promosi', 'customer' => 'Alya Rahman', 'category' => 'Pajak Badan', 'consultant' => 'Dina Maharani', 'status' => 'In Progress', 'sla' => '12 menit'],
        ['id' => 'CNS-2049', 'subject' => 'PPN atas transaksi marketplace', 'customer' => 'Bima Tax', 'category' => 'PPN', 'consultant' => 'Unassigned', 'status' => 'Open', 'sla' => '4 menit'],
        ['id' => 'CNS-2050', 'subject' => 'SPT tahunan pribadi', 'customer' => 'Nadia Putri', 'category' => 'Pajak Pribadi', 'consultant' => 'Raka Aditya', 'status' => 'Waiting Customer', 'sla' => '38 menit'],
    ];

    public function render()
    {
        return view('livewire.admin.consultations')->layout('components.layouts.app', [
            'title' => 'Consultation Management',
            'admin' => true,
        ]);
    }
}

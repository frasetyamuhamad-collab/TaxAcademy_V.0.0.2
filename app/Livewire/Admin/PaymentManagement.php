<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class PaymentManagement extends Component
{
    public array $transactions = [
        ['invoice' => 'INV-20260616-001', 'customer' => 'Alya Rahman', 'package' => 'Professional', 'method' => 'Midtrans VA', 'amount' => 'Rp699.000', 'status' => 'Paid', 'date' => '16 Jun 2026'],
        ['invoice' => 'INV-20260616-002', 'customer' => 'Bima Tax', 'package' => 'Basic', 'method' => 'Xendit QRIS', 'amount' => 'Rp299.000', 'status' => 'Pending', 'date' => '16 Jun 2026'],
        ['invoice' => 'INV-20260615-009', 'customer' => 'Nadia Putri', 'package' => 'Enterprise', 'method' => 'Bank Transfer', 'amount' => 'Rp2.400.000', 'status' => 'Failed', 'date' => '15 Jun 2026'],
    ];

    public function render()
    {
        return view('livewire.admin.payments')->layout('components.layouts.app', [
            'title' => 'Payment Monitoring',
            'admin' => true,
        ]);
    }
}

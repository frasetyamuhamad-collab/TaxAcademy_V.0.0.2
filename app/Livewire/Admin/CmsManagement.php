<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class CmsManagement extends Component
{
    public function render()
    {
        return view('livewire.admin.cms')->layout('components.layouts.app', [
            'title' => 'CMS Management',
            'admin' => true,
        ]);
    }
}

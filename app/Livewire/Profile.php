<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $current_password = '';

    public string $new_password = '';

    public string $new_password_confirmation = '';

    public ?string $message = null;

    public function mount(): void
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone ?? '';
    }

    public function updateProfile(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,'.auth()->id()],
            'phone' => ['nullable', 'string', 'max:30'],
        ]);

        auth()->user()->update($validated);
        $this->message = 'Profile berhasil diperbarui.';
    }

    public function updatePassword(): void
    {
        $this->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (! Hash::check($this->current_password, auth()->user()->password)) {
            $this->addError('current_password', 'Password saat ini tidak sesuai.');

            return;
        }

        auth()->user()->update(['password' => $this->new_password]);
        $this->reset('current_password', 'new_password', 'new_password_confirmation');
        $this->message = 'Password berhasil diperbarui.';
    }

    public function render()
    {
        return view('livewire.profile', [
            'user' => auth()->user()->load('activeSubscription.package'),
        ])->layout('components.layouts.app', ['title' => 'Profile', 'member' => true]);
    }
}

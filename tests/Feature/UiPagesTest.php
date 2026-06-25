<?php

namespace Tests\Feature;

use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class UiPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_ui_pages_render_successfully(): void
    {
        $this->seed();

        foreach (['/', '/training', '/training/pajak-pribadi-dari-nol', '/pricing', '/login', '/register'] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_admin_frontend_pages_render_successfully(): void
    {
        foreach ([
            '/admin',
            '/admin/users',
            '/admin/courses',
            '/admin/subscriptions',
            '/admin/payments',
            '/admin/consultations',
            '/admin/reports',
            '/admin/cms',
        ] as $path) {
            $this->get($path)->assertOk();
        }
    }

    public function test_member_pages_require_authentication(): void
    {
        foreach (['/dashboard', '/learning', '/profile', '/subscription'] as $path) {
            $this->get($path)->assertRedirect('/login');
        }
    }

    public function test_authenticated_member_pages_render_successfully(): void
    {
        $this->seed();
        $user = User::where('email', 'alya.rahman@example.com')->firstOrFail();

        foreach (['/dashboard', '/learning', '/profile', '/subscription'] as $path) {
            $this->actingAs($user)->get($path)->assertOk();
        }
    }

    public function test_user_can_register_and_login(): void
    {
        $this->seed();

        Livewire::test(RegisterPage::class)
            ->set('name', 'Bima Tax')
            ->set('email', 'bima@example.com')
            ->set('phone', '+62 811 2222 3333')
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('register')
            ->assertRedirect(route('dashboard'));

        auth()->logout();

        Livewire::test(LoginPage::class)
            ->set('email', 'bima@example.com')
            ->set('password', 'password')
            ->call('login')
            ->assertRedirect(route('dashboard'));
    }
}

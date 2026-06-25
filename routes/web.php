<?php

use App\Livewire\Dashboard;
use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Admin\CmsManagement;
use App\Livewire\Admin\ConsultationManagement;
use App\Livewire\Admin\CourseManagement;
use App\Livewire\Admin\PaymentManagement;
use App\Livewire\Admin\ReportsDashboard;
use App\Livewire\Admin\SubscriptionManagement;
use App\Livewire\Admin\UserManagement;
use App\Livewire\Landing;
use App\Livewire\Learning;
use App\Livewire\LoginPage;
use App\Livewire\Profile;
use App\Livewire\RegisterPage;
use App\Livewire\Subscription;
use App\Livewire\TrainingCatalog;
use App\Livewire\TrainingDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('home');
Route::get('/training', TrainingCatalog::class)->name('training.index');
Route::get('/training/{slug}', TrainingDetail::class)->name('training.show');
Route::get('/pricing', Subscription::class)->name('pricing');
Route::get('/login', LoginPage::class)->name('login');
Route::get('/register', RegisterPage::class)->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/learning', Learning::class)->name('learning');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/subscription', Subscription::class)->name('subscription');
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    })->name('logout');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', AdminDashboard::class)->name('dashboard');
    Route::get('/users', UserManagement::class)->name('users');
    Route::get('/courses', CourseManagement::class)->name('courses');
    Route::get('/subscriptions', SubscriptionManagement::class)->name('subscriptions');
    Route::get('/payments', PaymentManagement::class)->name('payments');
    Route::get('/consultations', ConsultationManagement::class)->name('consultations');
    Route::get('/reports', ReportsDashboard::class)->name('reports');
    Route::get('/cms', CmsManagement::class)->name('cms');
});

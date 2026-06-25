<?php

namespace App\Livewire;

use App\Models\Subscription as UserSubscription;
use App\Models\SubscriptionPackage;
use App\Support\ViewData;
use Livewire\Component;

class Subscription extends Component
{
    public ?string $message = null;

    public function subscribe(int $packageId)
    {
        if (! auth()->check()) {
            return $this->redirectRoute('register', navigate: true);
        }

        $package = SubscriptionPackage::query()->where('is_active', true)->findOrFail($packageId);

        UserSubscription::query()->where('user_id', auth()->id())->update(['status' => 'cancelled']);
        UserSubscription::create([
            'user_id' => auth()->id(),
            'subscription_package_id' => $package->id,
            'status' => 'active',
            'starts_at' => now(),
            'ends_at' => now()->addDays($package->access_days),
        ]);

        auth()->user()->update(['membership_status' => $package->name]);
        $this->message = 'Subscription '.$package->name.' aktif sampai '.now()->addDays($package->access_days)->format('d M Y').'.';

        return null;
    }

    public function render()
    {
        return view('livewire.subscription', [
            'plans' => SubscriptionPackage::query()
                ->where('is_active', true)
                ->get()
                ->map(fn (SubscriptionPackage $package) => ViewData::plan($package))
                ->all(),
        ])->layout('components.layouts.app', [
            'title' => 'Subscription',
            'member' => request()->routeIs('subscription'),
        ]);
    }
}

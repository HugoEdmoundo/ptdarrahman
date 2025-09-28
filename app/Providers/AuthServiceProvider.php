<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Role-based Gates
        Gate::define('isAdminOrSuperadmin', function ($user) {
            return in_array($user->role, ['admin', 'superadmin']);
        });

        Gate::define('isGuru', function ($user) {
            return $user->role === 'guru';
        });

        Gate::define('isMurid', function ($user) {
            return $user->role === 'murid';
        });

        // // Name-based Gates
        // Gate::define('inventaris', function ($user) {
        //     return in_array($user->name, ['Makhrozal Mizan', 'Murtado Tumari']);
        // });

        // Gate::define('pelanggaran', function ($user) {
        //     return $user->name === 'Murtado Tumari';
        // });
    }
}

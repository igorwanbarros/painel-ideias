<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config()->set(['password' => [
            'cost' => 7,
            'salt' => 'AosRvasfs03=*aslf30flz'
        ]]);
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        Auth::viaRequest('api', function ($request) {
            if ($request->input('email')) {
                $user = User::where('email', '=', $request->input('email'))
                    ->whereNull('deleted_at')
                    ->first();

                if (isset($user->id) && password_verify($request->input('password'), $user->password)) {
                    return $user;
                }

                return null;
            }
        });
    }
}

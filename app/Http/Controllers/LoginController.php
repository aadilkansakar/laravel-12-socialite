<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LoginController extends Controller
{
    protected $providers = ['google', 'linkedin', 'discord'];

    public function socialiteRedirect($provider)
    {
        if (!in_array($provider, $this->providers)) {
            return redirect()->route('login')->withErrors(['provider' => 'Unsupported provider']);
        }
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        if (!in_array($provider, $this->providers)) {
            return redirect()->route('login')->withErrors(['provider' => 'Unsupported provider']);
        }

        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect()->route('login')->withErrors(['provider' => 'Authentication failed.']);
        }

        if (!$socialUser->getEmail()) {
            return redirect()->route('login')->withErrors(['provider' => 'No email returned from provider.']);
        }

        $authUser = User::updateOrCreate(
            [
                'email' => $socialUser->getEmail(),
            ],
            [
                'name' => $socialUser->getName() ?? $socialUser->getNickname() ?? 'User',
                'password' => bcrypt('password'), // Consider random or null for social users
                $provider . '_id' => $socialUser->getId(),
            ]
        );

        Auth::login($authUser);

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'Logged out successfully.');
    }
}

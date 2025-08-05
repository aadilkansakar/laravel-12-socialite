<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function socialiteRedirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        if (!in_array($provider, ['google', 'github', 'discord'])) {
            return redirect()->route('login')->withErrors(['provider' => 'Unsupported provider']);
        }

        $user = Socialite::driver($provider)->user();

        $authUser = User::where('email', $user->getEmail())->orWhere($provider . '_id', $user->getId())->first();

        if (!$authUser) {
            $authUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt('password'), // Use a default password or handle as needed
                $provider . '_id' => $user->getId(),
            ]);
        } elseif ($authUser && !$authUser->{$provider . '_id'}) {
            $authUser->update([
                $provider . '_id' => $user->getId(),
            ]);
        }

        Auth::login($authUser);

        // Here you would typically find or create a user in your database
        // and log them in. For example:
        // $authUser = User::firstOrCreate([...]);

        // Auth::login($authUser);

        return redirect()->route('home'); // Redirect to a home route after login
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'Logged out successfully.');
    }
}

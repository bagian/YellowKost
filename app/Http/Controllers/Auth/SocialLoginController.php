<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = User::where('social_id', $socialUser->getId())
            ->where('provider', $provider)
            ->first();

        if (!$user) {
            $user = User::where('email', $socialUser->getEmail())->first();

            if ($user) {
                $user->update([
                    'social_id' => $socialUser->getId(),
                    'provider' => $provider,
                    'auth_method' => 'social',
                ]);
            } else {
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'social_id' => $socialUser->getId(),
                    'provider' => $provider,
                    'profile_picture' => $socialUser->getAvatar(),
                    'auth_method' => 'social',
                ]);
            }
        }

        Auth::login($user);

        return redirect()->intended('/dashboard');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interface\TenantRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    protected $tenantRepository;

    public function __construct(TenantRepositoryInterface $tenantRepository) {
        $this->tenantRepository = $tenantRepository;
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        $user = $this->tenantRepository->socialHandler($socialUser, $provider);

        Auth::login($user);

        return redirect()->intended('/dashboard');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interface\TenantRepositoryInterface;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    protected $tenantRepository;

    public function __construct(TenantRepositoryInterface $tenantRepository) {
        $this->tenantRepository = $tenantRepository;
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('pages.accounts._registers');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ],['email.unique' => 'Email sudah terdaftar!','password.confirmed' => 'Password tidak cocok!','password.min' => 'Setidaknya memiliki :min karakter.']);

        $userData['email'] = $request->email;
        $userData['password'] = Hash::make($request->password);
        $userData['auth_method'] = 'email';
        $userData['id_role'] = Role::where('slug', 'user')->value('id');

        $user = $this->tenantRepository->create($userData);

        event(new Registered($user));

        Auth::login($user);

        if (session()->has('pending_booking')) {
            return redirect()->route('booking.form');
        }

        return redirect(route('dashboard', absolute: false));
    }

}
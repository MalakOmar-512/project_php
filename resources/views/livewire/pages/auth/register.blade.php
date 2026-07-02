<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $role = '';
    public ?int $governorate_id = null;

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:merchant,employee,driver'],
            'governorate_id' => ['nullable', 'required_if:role,driver'],
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = $this->role;
        $validated['governorate_id'] = $this->role === 'driver' ? $this->governorate_id : null;

        event(new Registered($user = User::create($validated)));

        $user->assignRole($this->role);

        Auth::login($user);

        $this->redirect(match ($this->role) {
            'merchant' => '/merchant',
            'employee' => '/employee',
            'driver' => '/driver',
            default => '/',
        });
    }
}; ?>

<div>

    <h1 class="login-title">Register</h1>

    <p class="login-subtitle">Create your DeliveryHub account</p>

    <form wire:submit="register">

        {{-- NAME --}}
        <div class="input-group">
            <label>Name</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-user input-icon"></i>

                <input
                    wire:model="name"
                    type="text"
                    class="login-input"
                    placeholder="Enter your name"
                >
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        {{-- EMAIL --}}
        <div class="input-group">
            <label>Email</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-envelope input-icon"></i>

                <input
                    wire:model="email"
                    type="email"
                    class="login-input"
                    placeholder="Enter your email"
                >
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        {{-- ROLE --}}
        <div class="input-group">
            <label>Role</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-users input-icon"></i>

                <select wire:model.live="role" class="login-input">
                    <option value="">Choose Role</option>
                    <option value="merchant">Merchant</option>
                    <option value="employee">Employee</option>
                    <option value="driver">Driver</option>
                </select>
            </div>
            <x-input-error :messages="$errors->get('role')" class="mt-2"/>
        </div>

        {{-- GOVERNORATE --}}
        @if($role == 'driver')
        <div class="input-group">
            <label>Governorate</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-location-dot input-icon"></i>

                <select wire:model="governorate_id" class="login-input">
                    <option value="">Choose Governorate</option>
                    @foreach(\App\Models\Governorate::all() as $governorate)
                        <option value="{{ $governorate->id }}">
                            {{ $governorate->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        @endif

        {{-- PASSWORD --}}
        <div class="input-group">
            <label>Password</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-lock input-icon"></i>

                <input
                    wire:model="password"
                    type="password"
                    class="login-input"
                    placeholder="Enter your password"
                >
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        {{-- CONFIRM PASSWORD --}}
        <div class="input-group">
            <label>Confirm Password</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-lock input-icon"></i>

                <input
                    wire:model="password_confirmation"
                    type="password"
                    class="login-input"
                    placeholder="Confirm your password"
                >
            </div>
        </div>

        {{-- BUTTON --}}
        <button class="login-btn">
            REGISTER
        </button>

        {{-- SWITCH --}}
        <div class="auth-switch">
            <a href="{{ route('login') }}" wire:navigate>Already have an account?</a>
        </div>

    </form>
</div>
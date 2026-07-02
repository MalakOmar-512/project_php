<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $this->redirect('/admin');
        } elseif ($user->hasRole('merchant')) {
            $this->redirect('/merchant');
        } elseif ($user->hasRole('employee')) {
            $this->redirect('/employee');
        } elseif ($user->hasRole('driver')) {
            $this->redirect('/driver');
        } else {
            $this->redirect('/');
        }
    }
};

?>

<div>

    <h1 class="login-title">
        Login
    </h1>

    <p class="login-subtitle">
        Sign in to continue to DeliveryHub
    </p>

    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form wire:submit="login">

        {{-- Email --}}

        <div class="input-group">

            <label>Email</label>

            <div class="input-wrapper">

    <i class="fa-solid fa-envelope input-icon"></i>

    <input
        wire:model="form.email"
        type="email"
        placeholder="Enter your email"
        class="login-input"
        required
    >

    </div>

            <x-input-error :messages="$errors->get('form.email')" class="mt-2"/>

        </div>


        {{-- Password --}}

        <div class="input-group">

    <label>Password</label>

    <div class="input-wrapper">

        <i class="fa-solid fa-lock input-icon"></i>

        <input
            wire:model="form.password"
            id="password"
            type="password"
            placeholder="Enter your password"
            class="login-input"
            required
        >

        <button
            type="button"
            class="eye-btn"
            onclick="togglePassword()">

            <i id="eyeIcon" class="fa-solid fa-eye"></i>

        </button>

    </div>

    <x-input-error
        :messages="$errors->get('form.password')"
        class="mt-2"
    />

</div>


        <div class="login-options">

            <label>

                <input
                    type="checkbox"
                    wire:model="form.remember"
                >

                Remember me

            </label>

            @if(Route::has('password.request'))

                <a href="{{ route('password.request') }}">

                    Forgot Password?

                </a>

            @endif

        </div>


        <button class="login-btn">

            LOGIN

        </button>
        <div class="auth-switch">

    <p>
        Don't have an account?
    </p>

    <a href="{{ route('register') }}" wire:navigate>
        Register
    </a>

</div>

    </form>

</div>

<script>

function togglePassword(){

    let input = document.getElementById('password');
    let icon  = document.getElementById('eyeIcon');

    if(input.type==="password"){

        input.type="text";

        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");

    }else{

        input.type="password";

        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");

    }

}

</script>

</div>
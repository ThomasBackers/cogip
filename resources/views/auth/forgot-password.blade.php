<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a class="form-section__homepage-link" href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form
        class="form-section__form"
        method="POST"
        action="{{ route('password.email') }}"
        >
            @csrf

            <div class="info">
                <i class="info__icon fas fa-info-circle"></i>
    
                <p class="info__message">
                    Forgot your password? <br>
                    Just let us know your email and we will send you a password reset link to choose a new one.
                </p>
            </div>
            
            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div>
                <x-button>
                    {{ __('Email Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

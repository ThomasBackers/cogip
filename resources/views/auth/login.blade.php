<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a class="homepage-link" href="/">
                <img
                class="homepage-link__cogip-logo"
                src="{{ asset('images/logo/cogip-dark.svg') }}"
                alt="COGIP logo"
                >
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="session-status" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="validation-errors" :errors="$errors" />

        <form
        class="form"
        method="POST"
        action="{{ route('login') }}"
        >
            @csrf

            <!-- Email Address -->
            <div class="form__section">
                <x-label
                class="form__section__label"
                for="email"
                :value="__('Email')"
                />

                <x-input
                id="email"
                class="form__section__text-input"
                type="email"
                name="email"
                :value="old('email')"
                required autofocus
                />
            </div>

            <!-- Password -->
            <div class="form__section">
                <x-label
                class="form__section__label"
                for="password"
                :value="__('Password')" 
                />

                <x-input
                id="password"
                class="form__section__text-input"
                type="password"
                name="password"
                required autocomplete="current-password"
                />
            </div>

            <!-- Remember Me -->
            <div class="form__section">
                <label for="remember_me" class="form__section__holder">
                    <input
                    id="remember_me"
                    type="checkbox"
                    class="form__section__holder__checkbox"
                    name="remember"
                    >

                    <span class="form__section__holder__label">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form__section">
                @if (Route::has('password.request'))
                    <a class="form__section__link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="form__section__button">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

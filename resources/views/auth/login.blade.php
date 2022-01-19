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
        action="{{ route('login') }}"
        >
            @csrf

            <!-- Email Address -->
            <div class="form-section__form__section">
                <x-label for="email" :value="__('Email')" />

                <x-input
                id="email"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
                />
            </div>

            <!-- Password -->
            <div class="form-section__form__section">
                <x-label for="password" :value="__('Password')" />

                <x-input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                />
            </div>

            <!-- Remember Me -->
            <div class="form-section__form__section">
                <label for="remember_me" class="form-section__form__section__holder">
                    <input
                    id="remember_me"
                    type="checkbox"
                    class="form-section__form__section__holder__checkbox"
                    name="remember"
                    >
                    <span class="form-section__form__section__holder__label">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-section__form__section">
                @if (Route::has('password.request'))
                    <a class="form-section__form__section__link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button>
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

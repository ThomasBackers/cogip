<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a class="form-section__homepage-link" href="/">
                <x-application-logo />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form
        class="form-section__form"
        method="POST"
        action="{{ route('register') }}"
        >
            @csrf

            <!-- Name -->
            <div class="form-section__form__section">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="form-section__form__section">
                <x-label for="password" :value="__('Password')" />

                <x-input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                />
            </div>

            <!-- Confirm Password -->
            <div class="form-section__form__section">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                />
            </div>

            <div class="form-section__form__section">
                <a class="form-section__form__section__link" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button>
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

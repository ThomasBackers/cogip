@extends('layouts.guest')

@section('content')
    <section class="forgot-password">
        <h1 class="forgot-password hidden">Forgot Password?</h1>

        <div class="form-section">
            <x-application-logo />

            <!-- Session Status -->
            <?php /* <x-auth-session-status :status="session('status')" /> */ ?>

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
                        {{ __('Forgot your password? Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </p>
                </div>
                <!-- Email Address -->
                <div class="form-section__form__section">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="form-section__form__section">
                    <button class="form-section__form__section__button">
                        {{ __('Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

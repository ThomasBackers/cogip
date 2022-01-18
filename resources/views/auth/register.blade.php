@extends('layouts.app')

@section('content')
    <section class="login">
        <h1 class="login__heading hidden">Register</h1>

        <div class="form-section">
            <x-application-logo />

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
                    <x-label
                    for="name"
                    :value="__('Name')"
                    />
        
                    <x-input
                    id="name"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required autofocus
                    />
                </div>

                <!-- Email Address -->
                <div class="form-section__form__section">
                    <x-label
                    for="email"
                    :value="__('Email')"
                    />
        
                    <x-input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')" required
                    />
                </div>
        
                <!-- Password -->
                <div class="form-section__form__section">
                    <x-label
                    for="password"
                    :value="__('Password')"
                    />
        
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
                    <x-label
                    for="password_confirmation"
                    :value="__('Confirm Password')"
                    />
        
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
        
                    <button class="form-section__form__section__button">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

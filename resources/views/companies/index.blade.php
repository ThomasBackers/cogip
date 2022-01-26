<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Companies') }}
        </h1>
    </x-slot>

    <section class="companies">
        <h2 class="companies__heading">
            <i class="fas fa-building"></i> all companies
        </h2>

        <div class="companies__links">
            <a href="/companies/suppliers" class="companies__links__link">
                suppliers
            </a>

            <a href="/companies/clients" class="companies__links__link">
                clients
            </a>
        </div>

        @foreach ($companies as $company)
            @include('components.company')
        @endforeach
    </section>
</x-app-layout>

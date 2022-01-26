<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <section class="invoices">
        <h2 class="invoices__heading">
            <i class="fas fa-file-invoice-dollar"></i> last invoices
        </h2>

        @foreach ($invoices as $invoice)
            @include('components.invoice')
        @endforeach
    </section>

    <section class="contacts">
        <h2 class="contacts__heading">
            <i class="fas fa-user-tie"></i> last contacts
        </h2>

        @foreach ($contacts as $contact)
            @include('components.contact')
        @endforeach
    </section>

    <section class="companies">
        <h2 class="companies__heading">
            <i class="fas fa-building"></i> last companies
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

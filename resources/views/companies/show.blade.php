<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Companies') }}
        </h1>
    </x-slot>

    <section class="companies">
        <h2 class="companies__heading">
            <i class="fas fa-building"></i> {{ $company->name }}
        </h2>

        <div class="company">
            <h3 class="company__name">
                Summary
            </h3>

            <ul class="company__data-list">
                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        address:
                    </h4>

                    <p class="company__data-list__element__data">
                        {{ $company->address }},<br>
                        {{ $company->zip_code }}
                        {{ $company->city }}
                    </p>
                </li>

                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        country:
                    </h4>

                    <p class="company__data-list__element__data">
                        {{ $company->country }}
                    </p>
                </li>

                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        VAT:
                    </h4>

                    <p class="company__data-list__element__data">
                        {{ $company->vat_number }}
                    </p>
                </li>

                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        category:
                    </h4>

                    <p class="company__data-list__element__data">
                        {{ $company->category }}
                    </p>
                </li>

                @if (Auth::user()->hasRole('editor'))
                    <li class="contact__data-list__links">
                        <a href="/company/{{ $company->id }}/edit" class="invoice__data-list__links__link">
                            update
                        </a>

                        
                        <form action="/company/{{ $company->id }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="invoice__data-list__links__link del">
                                delete
                            </button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </section>

    <section class="contacts">
        <h2 class="contacts__heading">
            <i class="fas fa-user-tie"></i> contacts
        </h2>

        @foreach ($company->contacts as $contact)
            @include('components.contact')
        @endforeach
    </section>

    <section class="invoices">
        <h2 class="invoices__heading">
            <i class="fas fa-file-invoice-dollar"></i> invoices
        </h2>

        @foreach($company->contacts as $contact)
            @foreach ($contact->invoices as $invoice)
                @include('components.invoice')
            @endforeach
        @endforeach
    </section>
</x-app-layout>

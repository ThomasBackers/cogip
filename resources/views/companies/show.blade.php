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
            </ul>
        </div>
    </section>

    <section class="contacts">
        <h2 class="contacts__heading">
            <i class="fas fa-user-tie"></i> contacts
        </h2>

        @foreach ($company->contacts as $contact)
            <div class="contact">
                <h3 class="contact__name">
                    {{ $contact->firstname }}
                    {{ $contact->lastname }}
                </h3>

                <ul class="contact__data-list">
                    <li class="contact__data-list__element">
                        <h4 class="contact__data-list__element__heading">
                            company:
                        </h4>

                        <p class="contact__data-list__element__data">
                            {{ $contact->company->name }}
                        </p>
                    </li>

                    <li class="contact__data-list__element">
                        <h4 class="company__data-list__element__heading">
                            email:
                        </h4>

                        <p class="contact__data-list__element__data">
                            {{ $contact->email }}
                        </p>
                    </li>

                    <li class="contact__data-list__element">
                        <h4 class="contact__data-list__element__heading">
                            phone:
                        </h4>

                        <p class="contact__data-list__element__data">
                            {{ $contact->phone_number }}
                        </p>
                    </li>
                </ul>
            </div>
        @endforeach
    </section>

    <section class="invoices">
        <h2 class="invoices__heading">
            <i class="fas fa-file-invoice-dollar"></i> invoices
        </h2>

        @foreach($company->contacts as $contact)
            @foreach ($contact->invoices as $invoice)
                <div class="invoice">
                    <h3 class="invoice__name">
                        {{ $invoice->invoice_number }}
                    </h3>

                    <ul class="invoice__data-list">
                        <li class="invoice__data-list__element">
                            <h4 class="invoice__data-list__element__heading">
                                company:
                            </h4>

                            <p class="invoice__data-list__element__data">
                                {{ $invoice->contact->company->name }}
                            </p>
                        </li>

                        <li class="invoice__data-list__element">
                            <h4 class="invoice__data-list__element__heading">
                                amount:
                            </h4>

                            <p class="invoice__data-list__element__data">
                                {{ $invoice->amount }}€
                            </p>
                        </li>

                        <li class="invoice__data-list__element">
                            <h4 class="invoice__data-list__element__heading">
                                status:
                            </h4>

                            <p class="invoice__data-list__element__data">
                                @if ($invoice->outstanding_balance == 0)
                                    paid
                                @else
                                    pending
                                @endif
                            </p>
                        </li>

                        @if ($invoice->outstanding_balance != 0)
                            <li class="invoice__data-list__element">
                                <h4 class="invoice__data-list__element__heading">
                                    outstanding balance:
                                </h4>

                                <p class="invoice__data-list__element__data">
                                    {{ $invoice->outstanding_balance }}€
                                </p>
                            </li>
                        @endif
                    </ul>
                </div>
            @endforeach
        @endforeach
    </section>
</x-app-layout>

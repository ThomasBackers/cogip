<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Invoices') }}
        </h1>
    </x-slot>

    <section class="invoices">
        <h2 class="invoices__heading">
            <i class="fas fa-file-invoice-dollar"></i> {{ $invoice->invoice_number }}
        </h2>

        <div class="invoice">
            <h3 class="invoice__name">
                Summary
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
                        outstanding balance:
                    </h4>
    
                    <p class="invoice__data-list__element__data">
                        {{ $invoice->outstanding_balance }}€
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
                
                <li class="invoice__data-list__element">
                    <h4 class="invoice__data-list__element__heading">
                        date:
                    </h4>
        
                    <p class="invoice__data-list__element__data">
                        {{ str_split($invoice->created_at, 10)[0] }}
                    </p>
                </li>
            </ul>
        </div>        
    </section>

    <section class="contacts">
        <h2 class="contacts__heading">
            <i class="fas fa-user-tie"></i> contact
        </h2>

        <div class="contact">
            <h3 class="contact__name">
                {{ $invoice->contact->firstname }}
                {{ $invoice->contact->lastname }}
            </h3>
        
            <ul class="contact__data-list">
                <li class="contact__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        email:
                    </h4>
        
                    <p class="contact__data-list__element__data">
                        {{ $invoice->contact->email }}
                    </p>
                </li>
        
                <li class="contact__data-list__element">
                    <h4 class="contact__data-list__element__heading">
                        phone:
                    </h4>
        
                    <p class="contact__data-list__element__data">
                        {{ $invoice->contact->phone_number }}
                    </p>
                </li>
        
                <li class="contact__data-list__links">
                    <a href="/contacts/{{ $invoice->contact->id }}" class="contact__data-list__links__link">
                        details
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="companies">
        <h2 class="companies__heading">
            <i class="fas fa-building"></i> company
        </h2>

        <div class="company">
            <h3 class="company__name">
                {{ $invoice->contact->company->name }}
            </h3>
        
            <ul class="company__data-list">
                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        address:
                    </h4>
        
                    <p class="company__data-list__element__data">
                        {{ $invoice->contact->company->address }},<br>
                        {{ $invoice->contact->company->zip_code }}
                        {{ $invoice->contact->company->city }}
                    </p>
                </li>
        
                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        country:
                    </h4>
        
                    <p class="company__data-list__element__data">
                        {{ $invoice->contact->company->country }}
                    </p>
                </li>
        
                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        VAT:
                    </h4>
        
                    <p class="company__data-list__element__data">
                        {{ $invoice->contact->company->vat_number }}
                    </p>
                </li>
        
                <li class="company__data-list__element">
                    <h4 class="company__data-list__element__heading">
                        category:
                    </h4>
        
                    <p class="company__data-list__element__data">
                        {{ $invoice->contact->company->category }}
                    </p>
                </li>
        
                <li class="company__data-list__links">
                    <a href="/companies/{{ $invoice->contact->company->id }}" class="company__data-list__links__link">
                        details
                    </a>
                </li>
            </ul>
        </div>
    </section>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Contacts') }}
        </h1>
    </x-slot>

    <section class="contacts">
        <h2 class="companies__heading">
            <i class="fas fa-user-tie"></i> {{ $contact->firstname }} {{ $contact->lastname }}
        </h2>

        <div class="contact">
            <h3 class="contact__name">
                Summary
            </h3>
        
            <ul class="contact__data-list">
                <li class="contact__data-list__element">
                    <h4 class="contact__data-list__element__heading">
                        lastname:
                    </h4>
        
                    <p class="contact__data-list__element__data">
                        {{ $contact->lastname }}
                    </p>
                </li>
    
                <li class="contact__data-list__element">
                    <h4 class="contact__data-list__element__heading">
                        firstname:
                    </h4>
        
                    <p class="contact__data-list__element__data">
                        {{ $contact->firstname }}
                    </p>
                </li>
    
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
    </section>    

    <section class="invoices">
        <h2 class="invoices__heading">
            <i class="fas fa-file-invoice-dollar"></i> invoices
        </h2>

        @foreach ($contact->invoices as $invoice)
            @include('components.invoice')
        @endforeach
    </section>
</x-app-layout>

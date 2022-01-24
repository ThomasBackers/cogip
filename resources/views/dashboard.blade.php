<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <section class="contacts">
        <h2 class="contacts__heading">
            <i class="fas fa-building"></i> last contacts
        </h2>

        @foreach ($contacts as $contact)
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
   
    <section class="companies">
        <h2 class="companies__heading">
            <i class="fas fa-building"></i> last companies
        </h2>

        @foreach ($companies as $company)
            <div class="company">
                <h3 class="company__name">
                    {{ $company->name }}
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
        @endforeach
    </section>
</x-app-layout>

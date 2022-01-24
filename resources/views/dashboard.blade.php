<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

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

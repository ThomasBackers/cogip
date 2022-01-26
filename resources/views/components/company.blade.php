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

        <li class="company__data-list__links">
            <a href="/companies/{{ $company->id }}" class="company__data-list__links__link">
                details
            </a>

            @if (Auth::user()->hasRole('editor'))
                <a href="/companies/{{ $company->id }}/edit" class="invoice__data-list__links__link">
                    update
                </a>

                <form action="/companies/{{ $company->id }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="invoice__data-list__links__link del">
                        delete
                    </button>
                </form>
            @endif
        </li>
    </ul>
</div>

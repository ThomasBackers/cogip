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
                contact:
            </h4>

            <p class="invoice__data-list__element__data">
                {{ $invoice->contact->firstname }} {{ $invoice->contact->lastname }}
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
        
        <li class="invoice__data-list__element">
            <h4 class="invoice__data-list__element__heading">
                date:
            </h4>

            <p class="invoice__data-list__element__data">
                {{ str_split($invoice->created_at, 10)[0] }}
            </p>
        </li>

        <li class="invoice__data-list__links">
            <a href="/invoices/{{ $invoice->id }}" class="invoice__data-list__links__link">
                details
            </a>
        </li>
    </ul>
</div>

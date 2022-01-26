<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Invoices') }}
        </h1>
    </x-slot>

    <section class="invoices">
        <h2 class="invoices__heading">
            <i class="fas fa-file-invoice-dollar"></i> all invoices
        </h2>

        @foreach ($invoices as $invoice)
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

                        @if (Auth::user()->hasRole('editor'))
                            <a href="/invoices/{{ $invoice->id }}/edit" class="invoice__data-list__links__link">
                                update
                            </a>

                            <form action="/invoices/{{ $invoice->id }}" method="POST">
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
        @endforeach
    </section>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __($type) }}
        </h1>
    </x-slot>

    <section class="editing">
        <form
        class="editing__form"
        action="/{{ $group }}/{{ $data->id }}"
        method="POST"
        >
            @csrf
            @if ($type === 'Editing')
                @method('PUT')
            @endif

            @if ($group === 'companies')
                <input
                class="editing__form__input"
                type="text"
                name="name"
                @if ($type === 'Editing')
                    value="{{ $data->name }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="address"
                @if ($type === 'Editing')
                    value="{{ $data->address }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="number"
                name="zip_code"
                min="1000"
                max="99999"
                step="1"
                @if ($type === 'Editing')
                    value="{{ $data->zip_code }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="city"
                @if ($type === 'Editing')
                    value="{{ $data->city }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="country"
                @if ($type === 'Editing')
                    value="{{ $data->country }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="vat_number"
                @if ($type === 'Editing')
                    value="{{ $data->vat_number }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="name"
                @if ($type === 'Editing')
                    value="{{ $data->name }}"
                @endif
                >

                <select
                class="editing__form__input"
                name="category"
                >
                    <option
                    value="client"
                    @if ($data->category === 'client')
                        selected="selected"
                    @endif
                    >
                        Client
                    </option>

                    <option
                    value="supplier"
                    @if ($data->category === 'supplier')
                        selected="selected"
                    @endif
                    >
                        Supplier
                    </option>
                </select>

            @elseif ($group === 'contacts')
                <input
                class="editing__form__input"
                type="text"
                name="firstname"
                @if ($type === 'Editing')
                    value="{{ $data->firstname }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="lastname"
                @if ($type === 'Editing')
                    value="{{ $data->lastname }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="company"
                @if ($type === 'Editing')
                    value="{{ $data->company->name }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="email"
                name="email"
                @if ($type === 'Editing')
                    value="{{ $data->email }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="tel"
                name="phone_number"
                pattern="[0-9]{10}"
                @if ($type === 'Editing')
                    value="{{ $data->phone_number }}"
                @endif
                >

            @elseif ($group === 'invoices')
                <input
                class="editing__form__input"
                type="text"
                name="invoice_number"
                @if ($type === 'Editing')
                    value="{{ $data->invoice_number }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="number"
                name="amount"
                min="0.1"
                max="999999.99"
                step="0.1"
                @if ($type === 'Editing')
                    value="{{ $data->amount }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="number"
                name="outstanding_balance"
                min="0"
                max="999999.99"
                step="0.1"
                @if ($type === 'Editing')
                    value="{{ $data->outstanding_balance }}"
                @endif
                >

                <input
                class="editing__form__input"
                type="text"
                name="contact_lastname"
                @if ($type === 'Editing')
                    value="{{ $data->contact->lastname }}"
                @endif
                >

            @endif
        </form>
    </section>
</x-app-layout>

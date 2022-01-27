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
            @elseif ($group === 'contacts')

            @elseif ($group === 'invoices')

            @endif
        </form>
    </section>
</x-app-layout>

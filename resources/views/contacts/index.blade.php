<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Contacts') }}
        </h1>
    </x-slot>

    <section class="contacts">
        <h2 class="contacts__heading">
            <i class="fas fa-user-tie"></i> all contacts
        </h2>

        @foreach ($contacts as $contact)
            @include('components.contact')
        @endforeach
    </section>
</x-app-layout>

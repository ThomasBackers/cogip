<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Editing') }}
        </h1>
    </x-slot>

    <section class="editing">
        <form action="/{{ $group }}/{{ $data->id }}" class="editing__form">
            @csrf
            @method('PUT')
        </form>
    </section>
</x-app-layout>

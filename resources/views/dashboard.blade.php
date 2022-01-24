<x-app-layout>
    <x-slot name="header">
        <h1 class="header__heading">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="dashboard">
        @foreach ($companies as $company)
            <div>{{ $company->name }}</div>
        @endforeach
    </div>
</x-app-layout>

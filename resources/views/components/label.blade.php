@props(['value'])

<label {{ $attributes->merge(['class' => 'form-section__form__section__label']) }}>
    {{ $value ?? $slot }}
</label>

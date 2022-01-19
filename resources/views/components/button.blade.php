<button {{ $attributes->merge(['type' => 'submit', 'class' => 'form-section__form__section__button']) }}>
    {{ $slot }}
</button>

@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'validation-errors']) }}>
        <ul class="validation-errors__errors">
            @foreach ($errors->all() as $error)
                <li class="validation-errors__errors__error">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

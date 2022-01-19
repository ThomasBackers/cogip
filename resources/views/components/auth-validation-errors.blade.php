@props(['errors'])

@if ($errors->any())
    <div class="validation-errors"{{ $attributes }}>
        <ul class="validation-errors__errors">
            @foreach ($errors->all() as $error)
                <li class="validation-errors__errors__error">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

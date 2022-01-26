<div class="contact">
    <h3 class="contact__name">
        {{ $contact->firstname }}
        {{ $contact->lastname }}
    </h3>

    <ul class="contact__data-list">
        <li class="contact__data-list__element">
            <h4 class="contact__data-list__element__heading">
                company:
            </h4>

            <p class="contact__data-list__element__data">
                {{ $contact->company->name }}
            </p>
        </li>

        <li class="contact__data-list__element">
            <h4 class="company__data-list__element__heading">
                email:
            </h4>

            <p class="contact__data-list__element__data">
                {{ $contact->email }}
            </p>
        </li>

        <li class="contact__data-list__element">
            <h4 class="contact__data-list__element__heading">
                phone:
            </h4>

            <p class="contact__data-list__element__data">
                {{ $contact->phone_number }}
            </p>
        </li>

        <li class="contact__data-list__links">
            <a href="/contacts/{{ $contact->id }}" class="contact__data-list__links__link">
                details
            </a>

            @if (Auth::user()->hasRole('editor'))
                <a href="/contacts/{{ $contact->id }}/edit" class="invoice__data-list__links__link">
                    update
                </a>

                <form action="/contacts/{{ $contact->id }}" method="POST">
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

@component('mail::message')

    <p>
        You received a message from {{ $name }}
    </p>
    <p>
        Name: {{ $name }}
    </p>

    <p>
        Email: {{ $email }}
    </p>

    <p>
        Phone Number: {{ $phone }}
    </p>

    <p>
        Square Footage of Home: {{ $sq_footage }}
    </p>

    <p>
        Additional Notes: {{ $notes }}
    </p>

    <p>
        Thanks,<br>
        {{ config('app.name') }}
    </p>
@endcomponent

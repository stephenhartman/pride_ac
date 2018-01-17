@component('mail::message')

    <p>
        You received a message from {{ $contact['name'] }}
    </p>
    <p>
        Name: {{ $contact['name'] }}
    </p>

    <p>
        Email: {{ $contact['email'] }}
    </p>

    <p>
        Phone Number: {{ $contact['phone'] }}
    </p>

    <p>
        Square Footage of Home: {{ $contact['sq_footage'] }}
    </p>

    <p>
        Additional Notes: {{ $contact['notes'] }}
    </p>
<p>
    Thanks,<br>
    {{ config('app.name') }}
</p>

@endcomponent

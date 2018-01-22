@component('mail::message')
        ## You received a message from {{ $name }}.

        -Name: {{ $name }}
        -Email: {{ $email }}
        -Phone Number: {{ $phone }}
        -Square Footage of Home: {{ $sq_footage }}
        -Additional Notes: {{ $notes }}

        Thanks,
        {{ config('app.name') }}
@endcomponent

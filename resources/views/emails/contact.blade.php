@component('mail::message')
        ## You received a message from {{ $name }} regarding a request for a quote.
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Phone Number: {{ $phone }}</p>
        <p>Square Footage of Home: {{ $sq_footage }}</p>
        <p>Additional Notes: {{ $notes }}</p>

        Thanks,<br>
        {{ config('app.name') }}
@endcomponent

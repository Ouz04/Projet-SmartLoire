@component('mail::message')
# Bonjour

Vous avez reçu un mail de la part de {{$data['nom']}}

{{$data['email']}}

{{$data['sujet']}}
Message
{{$data['description']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

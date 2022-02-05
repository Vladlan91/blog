@component('mail:message')
    # Email
@component('mail::button', ['url' => route('register.verify', ['token'=> $user->verify_token])])
    Verify
@endcomponent

    Thanks, <br>
{{ config ('app.name')}}
@endcomponent

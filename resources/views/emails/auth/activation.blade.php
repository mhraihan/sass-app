@component('mail::message')
# Please active your account

please click the button to activate your account.

@component('mail::button', ['url' => route('activate.activate',$token)])
    Activate
@endcomponent

Thanks,

{{ config('app.name') }}
@endcomponent

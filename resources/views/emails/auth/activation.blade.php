@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => route('activate.activate',$token)])
    Activate
@endcomponent

Thanks,

{{ config('app.name') }}
@endcomponent

@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
            Beyondant Notification
        @endcomponent
    @endslot

    <h1></h1>
    <h2>Hello {{ucwords($first_name)}},</h2>
    <p>Please be advised that your vCard has recently been downloaded. When possible log into your Beyondant account to view additional details.</p>
    <p>Login: <a href="https://beyondant.com/">www.beyondant.com</a></p>
    <p>For the best experience viewing your contacts please log into your account on a desktop computer. </p>
    <p>Thank you!</p>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent

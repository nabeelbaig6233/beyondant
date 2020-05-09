@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
            Beyondant Notification
        @endcomponent
    @endslot

    <h1></h1>
    <h2>Hello {{ucwords($first_name)}},</h2>
    <p>Please be advised that your Beyondant account has been upgraded to {{ucwords($account_type)}}.
        <br/>If you believe this was done in error, please contact us as soon as possible.</p>
    <p>Regards, </p>
    <p>Technical Support Department</p>
    <p>.............................................</p>
    <p>Beyondant, LLC</p>
    <p>Email: <a href="mailto:Support@Beyondant.com">Support@Beyondant.com</a></p>
    <p>Website: <a href="https://beyondant.com/">www.beyondant.com</a></p>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent

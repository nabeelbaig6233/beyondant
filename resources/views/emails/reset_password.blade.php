@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
            Beyondant Account Notification
        @endcomponent
    @endslot

    <h1></h1>
    <h1>Notification!</h1>
    <h1>Your Account Password Has Been Reset.</h1>
    <h4>Your New Credentials</h4>
    <p><strong>Email: </strong> {{$email}}</p>
    <p><strong>New Password: </strong> {{$password}}</p>
    <p>Your Dedicated Profile: <a href="https://beyondant.com/public/login">https://beyondant.com/public/login</a></p>
    <p>Feel Free To Share Your Dedicated Profile via Email or Text</p>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent

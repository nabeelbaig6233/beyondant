@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
            Beyondant Account Notification
        @endcomponent
    @endslot

    <h1></h1>
    <h1>Congratulations!</h1>
    <h1>Your {{$type=="company"?"Company":"Personal"}} Account Is Created.</h1>
    <h4>Your Login Credentials</h4>
    <p><strong>Email: </strong> {{$email}}</p>
    <p><strong>Password: </strong> {{$password}}</p>
    <p>Your Dedicated Profile: <a href="https://beyondant.com/public/login">https://beyondant.com/public/login</a></p>
    <p>Feel Free To Share Your Dedicated Profile via Email or Text</p>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent

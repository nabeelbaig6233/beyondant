{{--@component('mail::layout')--}}
{{--@slot ('header')--}}
{{--@component('mail::header', ['url' => config('app.url')])--}}

{{--@endcomponent--}}
{{--@endslot--}}



{{--@slot ('footer')--}}
{{--@component('mail::footer')--}}
{{--© 2020 Beyondant. All rights reserved.--}}
{{--@endcomponent--}}
{{--@endslot--}}
{{--@endcomponent--}}

@component('mail::layout')
    {{-- Header --}}
@slot('header')
@component('mail::header',["url"=>""])
Beyondant Email Notification
@endcomponent
@endslot

<h1></h1>
<h1>Congratulations!</h1>
<h1>Your Digital Profile For {{$company}} Is Ready For Use.</h1>
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

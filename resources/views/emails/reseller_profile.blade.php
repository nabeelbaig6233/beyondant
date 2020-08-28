@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header',["url"=>""])
            Reseller Account Notification
        @endcomponent
    @endslot

    <h1></h1>
    @foreach($messages as $message)
        <h1>{{$message}}</h1>
    @endforeach
    @if(!empty($credentials))
    <h4>Your Login Credentials</h4>
    <p><strong>Email: </strong> {{$credentials["email"]}}</p>
    <p><strong>Password: </strong> {{$credentials["password"]}}</p>
    @endif
    <p>Click This URL <a href="{{route("reseller.login")}}">{{route("reseller.login")}}</a> To Login.</p>
    <p>Your Dedicated Profile: <a href="{{$profile_link}}">{{$profile_link}}</a></p>
    @if(!empty($credentials))
    <p>Please be sure to update your temporary password once you have successfully logged into the platform.</p>
    @endif
    <p>Feel Free To Share Your Dedicated Reseller Landing Page via Email or Text</p>
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
